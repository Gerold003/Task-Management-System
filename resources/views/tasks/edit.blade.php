@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Edit Task</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> Please fix the issues below.<br><br>
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="shadow p-4 rounded bg-light">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ $task->description }}</textarea>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="is_completed" value="1" class="form-check-input" {{ $task->is_completed ? 'checked' : '' }}>
            <label class="form-check-label">Mark as Completed</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Update Task</button>
    </form>
</div>
@endsection
