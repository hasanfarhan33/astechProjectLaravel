<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; 

Route::get('/', function () {
    return view('welcome');
});

// GET ALL STUDENTS 
Route::get('/api/students', [StudentController::class, 'getAllStudents']); 

// GET ONE STUDENT 
Route::get("/api/students/{id}", [StudentController::class, 'getOneStudent']); 

// ADD A STUDENT 

// UPDATE A STUDENT 

// DELETE A STUDENT