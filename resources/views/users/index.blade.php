@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
    <h1>User Accounts</h1>

    <a href="{{ route('users.create') }}">Add User</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>Avatar</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Actions</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>
                    @if ($user->avatar)
                        <img src="{{ asset('storage/' . $user->avatar) }}"
                             alt="{{ $user->full_name }} avatar"
                             width="80" height="80"
                             style="object-fit: cover;">
                    @else
                        <div style="width: 80px; height: 80px; background: #eee; display: flex; align-items: center; justify-content: center;">
                            No avatar
                        </div>
                    @endif
                </td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->full_name }}</td>
                <td>
                    <a href="{{ route('users.edit', $user) }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection