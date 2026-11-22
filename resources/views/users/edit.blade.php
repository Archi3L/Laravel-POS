@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <h1>Edit User</h1>

    <form method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="username">Username</label>
        <input id="username" type="text" name="username"
               value="{{ old('username', $user->username) }}" required>
        @error('username')
            <p>{{ $message }}</p>
        @enderror

        <br>

        <label for="full_name">Full name</label>
        <input id="full_name" type="text" name="full_name"
               value="{{ old('full_name', $user->full_name) }}" required>
        @error('full_name')
            <p>{{ $message }}</p>
        @enderror

        <br>

        @if ($user->avatar)
            <p>Current avatar:</p>
            <img src="{{ asset('storage/' . $user->avatar) }}"
                 alt="Current avatar" width="100">
        @else
            <p>No avatar uploaded yet.</p>
        @endif

        <label for="avatar">Choose a new avatar (optional, max 2 MB)</label>
        <input id="avatar" type="file" name="avatar"
               accept="image/jpeg,image/png,image/webp">
        @error('avatar')
            <p>{{ $message }}</p>
        @enderror

        <br>

        <button type="submit">Update User</button>
        <a href="{{ route('users.index') }}">Cancel</a>
    </form>
@endsection