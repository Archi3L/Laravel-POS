@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
    <h1>Customer Accounts</h1>

    <a href="{{ route('customers.create') }}">Add Customer</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>

        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->full_name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                <td>
                    <a href="{{ route('customers.edit', $customer) }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection