<!DOCTYPE html>
<html>
<head>
    <title>Task Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('tasks.index') }}">Task Manager</a>
        </div>
    </nav>
    
    @yield('content')
</body>
</html>
