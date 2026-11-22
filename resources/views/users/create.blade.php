@extends('layouts.app')

@section('title', 'Add User')

@section('content')
    <h1>Add User</h1>

    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <label for="username">Username</label>
        <input id="username" type="text" name="username"
               value="{{ old('username') }}" required>
        @error('username')
            <p>{{ $message }}</p>
        @enderror

        <br>

        <label for="full_name">Full name</label>
        <input id="full_name" type="text" name="full_name"
               value="{{ old('full_name') }}" required>
        @error('full_name')
            <p>{{ $message }}</p>
        @enderror

        <br>

        <button type="submit">Save User</button>
        <a href="{{ route('users.index') }}">Cancel</a>
    </form>
@endsection