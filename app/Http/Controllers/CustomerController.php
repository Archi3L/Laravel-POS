<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['full_name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09171234567'],
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09181234567'],
            ['full_name' => 'Ana Reyes', 'email' => 'ana@example.com', 'phone' => '09191234567'],
            ['full_name' => 'Mark Garcia', 'email' => 'mark@example.com', 'phone' => '09201234567'],
            ['full_name' => 'Liza Mendoza', 'email' => 'liza@example.com', 'phone' => '09211234567'],
        ];

        return view('customers.index', compact('customers'));
    }
}