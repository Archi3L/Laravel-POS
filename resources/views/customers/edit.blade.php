@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
    <h1>Edit Customer</h1>

    <form method="POST" action="{{ route('customers.update', $customer) }}">
        @csrf
        @method('PUT')

        <label for="full_name">Full name</label>
        <input id="full_name" type="text" name="full_name"
               value="{{ old('full_name', $customer->full_name) }}" required>
        @error('full_name')
            <p>{{ $message }}</p>
        @enderror

        <br>

        <label for="email">Email</label>
        <input id="email" type="email" name="email"
               value="{{ old('email', $customer->email) }}" required>
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <br>

        <label for="phone">Phone</label>
        <input id="phone" type="text" name="phone"
               value="{{ old('phone', $customer->phone) }}">
        @error('phone')
            <p>{{ $message }}</p>
        @enderror

        <br>

        <button type="submit">Update Customer</button>
        <a href="{{ route('customers.index') }}">Cancel</a>
    </form>
@endsection