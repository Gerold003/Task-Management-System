<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Redirect the root URL to the tasks index page
Route::get('/', function () {
    return redirect()->route('tasks.index');
});

// Resource routes for TaskController
Route::resource('tasks', TaskController::class);
