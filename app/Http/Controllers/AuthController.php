<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // عرض صفحة تسجيل الدخول
    public function showLogin()
    {
        return view('auth.login');
    }

    // تسجيل الدخول
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // تسجيل دخول المدرس
        $teacher = Teacher::where('email', $request->email)->first();
        if ($teacher && Hash::check($request->password, $teacher->password)) {
            Auth::login($teacher);
            return redirect()->route('teacher.dashboard');
        }

        // تسجيل دخول الطالب
        $student = Student::where('email', $request->email)->first();
        if ($student && Hash::check($request->password, $student->password)) {
            Auth::login($student);
            return redirect()->route('student.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    // تسجيل الخروج
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    // عرض صفحة تسجيل الطالب
    public function showStudentRegister()
    {
        return view('auth.register-student');
    }

    // تسجيل الطالب
    public function registerStudent(Request $request)
    {
        $request->validate([
            'sid' => 'required',
            'sname' => 'required',
            'email' => 'required|email|unique:students',
            'password' => 'required|min:6',
            'phone' => 'required',
            'address' => 'required',
            'yearLevel' => 'required'
        ]);

        Student::create([
            'sid' => $request->sid,
            'sname' => $request->sname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'yearLevel' => $request->yearLevel,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'Student registered successfully!');
    }

    // عرض صفحة تسجيل المدرس
    public function showTeacherRegister()
    {
        return view('auth.register-teacher');
    }

    // تسجيل المدرس
    public function registerTeacher(Request $request)
    {
        $request->validate([
            'tid' => 'required',
            'tname' => 'required',
            'email' => 'required|email|unique:teachers',
            'password' => 'required|min:6',
            'phone' => 'required',
            'address' => 'required',
            'specialization' => 'required'
        ]);

        Teacher::create([
            'tid' => $request->tid,
            'tname' => $request->tname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'specialization' => $request->specialization,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'Teacher registered successfully!');
    }
}