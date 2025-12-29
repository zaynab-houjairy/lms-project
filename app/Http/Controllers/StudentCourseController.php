<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentCourseController extends Controller
{
   
    public function index()
    {
        $student = session('student');

        if (!$student) {
            return redirect('/login')->with('error', 'Please login first.');
        }

        $courses = $student->courses()->with(['materials', 'assignments'])->get();

        return view('student.courses', compact('courses'));
    }

    public function show($id)
    {
        $student = session('student');

        if (!$student) {
            return redirect('/login')->with('error', 'Please login first.');
        }

        $course = $student->courses()->with(['materials', 'assignments'])->findOrFail($id);

        $materials = $course->materials;
        $assignments = $course->assignments;

        return view('student.course-detail', compact('course', 'materials', 'assignments'));
    }
}