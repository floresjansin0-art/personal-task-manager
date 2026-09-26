@extends('layouts.app')

@section('title', 'My Tasks')

@section('content')
<div class="page-header">
    <div>
        <h1>My Tasks</h1>
        <p>Manage your personal tasks in one place.</p>
    </div>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ New Task</a>
</div>

@if($tasks->count())
    <div class="task-grid">
        @foreach($tasks as $task)
            <div class="task-card {{ $task->status === 'Completed' ? 'completed-card' : '' }}">
                <div class="task-top">
                    <h2>{{ $task->task_name }}</h2>

                    <span class="status {{ strtolower($task->status) }}">
                        {{ $task->status }}
                    </span>
                </div>

                <p class="description">
                    {{ $task->description ?: 'No description provided.' }}
                </p>

                <p class="due-date">
                    Due: <strong>{{ $task->due_date->format('M d, Y') }}</strong>
                </p>

                <div class="actions">
                    <form action="{{ route('tasks.status', $task) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-status">
                            {{ $task->status === 'Pending' ? 'Mark Completed' : 'Mark Pending' }}
                        </button>
                    </form>

                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-edit">Edit</a>

                    <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this task?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="empty">
        <h2>No tasks yet</h2>
        <p>Create your first task to get started.</p>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
    </div>
@endif
@endsection
