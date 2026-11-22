<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'cashier01', 'full_name' => 'Alex Santos'],
            ['username' => 'cashier02', 'full_name' => 'Jamie Reyes'],
            ['username' => 'manager01', 'full_name' => 'Jordan Cruz'],
            ['username' => 'staff01', 'full_name' => 'Taylor Garcia'],
            ['username' => 'staff02', 'full_name' => 'Sam Mendoza'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['username' => $user['username']],
                ['full_name' => $user['full_name']]
            );
        }

        $customers = [
            ['full_name' => 'Maya Santos', 'email' => 'maya@example.test', 'phone' => '0900-000-0001'],
            ['full_name' => 'Noah Reyes', 'email' => 'noah@example.test', 'phone' => '0900-000-0002'],
            ['full_name' => 'Lia Cruz', 'email' => 'lia@example.test', 'phone' => '0900-000-0003'],
            ['full_name' => 'Ethan Garcia', 'email' => 'ethan@example.test', 'phone' => '0900-000-0004'],
            ['full_name' => 'Zoe Mendoza', 'email' => 'zoe@example.test', 'phone' => '0900-000-0005'],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                [
                    'full_name' => $customer['full_name'],
                    'phone' => $customer['phone'],
                ]
            );
        }
    }
}