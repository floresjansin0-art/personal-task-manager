<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Personal Task Manager')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="container nav-content">
            <a href="{{ route('tasks.index') }}" class="brand">Task Manager</a>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Add Task</a>
        </div>
    </nav>

    <main class="container">
        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert error">
                <strong>Please fix the following:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        <p>Personal Task Manager &copy; {{ date('Y') }}</p>
    </footer>
</body>
</html>
