<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'Alex Rivera'],
            ['username' => 'cashier1', 'full_name' => 'Bea Torres'],
            ['username' => 'cashier2', 'full_name' => 'Carlo Lim'],
            ['username' => 'manager', 'full_name' => 'Dina Cruz'],
            ['username' => 'staff1', 'full_name' => 'Emil Flores'],
        ];

        return view('users.index', compact('users'));
    }
}