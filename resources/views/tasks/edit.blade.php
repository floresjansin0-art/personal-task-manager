@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
<div class="form-container">
    <h1>Edit Task</h1>
    <p class="form-subtitle">Update your task information.</p>

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="task_name">Task Name</label>
        <input type="text" id="task_name" name="task_name"
               value="{{ old('task_name', $task->task_name) }}" required>

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="5">{{ old('description', $task->description) }}</textarea>

        <label for="status">Status</label>
        <select id="status" name="status" required>
            <option value="Pending" {{ old('status', $task->status) === 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Completed" {{ old('status', $task->status) === 'Completed' ? 'selected' : '' }}>Completed</option>
        </select>

        <label for="due_date">Due Date</label>
        <input type="date" id="due_date" name="due_date"
               value="{{ old('due_date', $task->due_date->format('Y-m-d')) }}" required>

        <div class="form-actions">
            <a href="{{ route('tasks.index') }}" class="btn btn-cancel">Cancel</a>
            <button type="submit" class="btn btn-primary">Update Task</button>
        </div>
    </form>
</div>
@endsection
