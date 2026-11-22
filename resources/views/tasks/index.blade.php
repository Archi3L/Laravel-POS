@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <h1>Task List</h1>

    @if ($tasks->isEmpty())
        <p>No tasks found.</p>
    @else
        <table border="1" cellpadding="8">
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Date</th>
            </tr>

            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ ucfirst($task->status) }}</td>
                    <td>{{ $task->task_date }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection