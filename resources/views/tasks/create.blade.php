@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
<div class="form-container">
    <h1>Add New Task</h1>
    <p class="form-subtitle">Create a new task and set its deadline.</p>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <label for="task_name">Task Name</label>
        <input type="text" id="task_name" name="task_name"
               value="{{ old('task_name') }}" placeholder="Example: Finish Laravel project" required>

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="5"
                  placeholder="Enter task details...">{{ old('description') }}</textarea>

        <label for="status">Status</label>
        <select id="status" name="status" required>
            <option value="Pending" {{ old('status', 'Pending') === 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Completed" {{ old('status') === 'Completed' ? 'selected' : '' }}>Completed</option>
        </select>

        <label for="due_date">Due Date</label>
        <input type="date" id="due_date" name="due_date"
               value="{{ old('due_date') }}" required>

        <div class="form-actions">
            <a href="{{ route('tasks.index') }}" class="btn btn-cancel">Cancel</a>
            <button type="submit" class="btn btn-primary">Save Task</button>
        </div>
    </form>
</div>
@endsection
