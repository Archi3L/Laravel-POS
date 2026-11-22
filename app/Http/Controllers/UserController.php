<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }
    public function edit(User $user)
{
    return view('users.edit', compact('user'));
}

public function update(UpdateUserRequest $request, User $user)
{
    $data = $request->validated();

    // Keep the existing avatar if no new file was uploaded.
    unset($data['avatar']);

    if ($request->hasFile('avatar')) {
        $thumbnail = Image::read($request->file('avatar'))
            ->cover(300, 300)
            ->toWebp(80);

        $avatarPath = 'avatars/' . Str::uuid() . '.webp';

        Storage::disk('public')->put($avatarPath, (string) $thumbnail);

        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        $data['avatar'] = $avatarPath;
    }

    $user->update($data);

    return redirect()->route('users.index')
        ->with('success', 'User updated successfully.');
 public function create()
{
    return view('users.create');
}

public function store(StoreUserRequest $request)
{
    User::create($request->validated());

    return redirect()->route('users.index')
        ->with('success', 'User created successfully.');
}
}
}