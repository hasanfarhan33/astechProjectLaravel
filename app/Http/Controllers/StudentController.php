<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;

class StudentController extends Controller
{
    // GETTING ALL THE STUDENTS 
    public function getAllStudents(): JsonResponse {
        $students = DB::table('students')->get(); 

        return response()->json($students); 
    }

    // GETTING ONE STUDENT 
    public function getOneStudent($id): JsonResponse {
        $student = DB::table('students')->where('id', $id)->first(); 
        
        if(!$student) return response()->json(['message' => 'Student not found'], 404); 

        return response()->json($student); 
    }

    // ADD A STUDENT 

    // DELETE A STUDENT 

    // UPDATE A STUDENT
}
