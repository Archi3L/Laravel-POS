<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $today = now()->toDateString();
        $yesterday = now()->subDay()->toDateString();
        $twoDaysAgo = now()->subDays(2)->toDateString();

        $tasks = [
            ['title' => 'Check POS sales', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Restock the shelves', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Submit the daily report', 'status' => 'completed', 'task_date' => $today],
            ['title' => 'Update price labels', 'status' => 'completed', 'task_date' => $yesterday],
            ['title' => 'Reconcile the cash drawer', 'status' => 'pending', 'task_date' => $yesterday],
            ['title' => 'Review the delivery', 'status' => 'pending', 'task_date' => $yesterday],
            ['title' => 'Clean the storage area', 'status' => 'completed', 'task_date' => $twoDaysAgo],
            ['title' => 'Contact the supplier', 'status' => 'pending', 'task_date' => $twoDaysAgo],
        ];

        foreach ($tasks as $task) {
            Task::updateOrCreate(
                ['title' => $task['title'], 'task_date' => $task['task_date']],
                ['status' => $task['status']]
            );
        }

        User::updateOrCreate(
            ['username' => 'carlo'],
            ['full_name' => 'Carlo Lantan', 'email' => 'carlo@example.test']
        );
    }
}