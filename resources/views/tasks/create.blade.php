@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center" style="font-weight: bold; font-size: 2rem;">Create New Task</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> Please fix the issues below.<br><br>
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST" class="shadow p-4 rounded bg-light">
        @csrf
        <div class="mb-3">
            <label class="form-label"><strong>Title</strong></label>
            <input type="text" name="title" class="form-control" placeholder="Enter task title" required 
                title="Provide a short and descriptive title for the task.">
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Description</strong></label>
            <textarea name="description" class="form-control" rows="4" placeholder="Enter task description" 
                title="Provide additional details about the task."></textarea>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save Task</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
