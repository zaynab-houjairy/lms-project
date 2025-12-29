<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showLogin()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $teacher = Teacher::where('email', $request->email)->first();
        if ($teacher && Hash::check($request->password, $teacher->password)) {
             session()->put('teacher', $teacher);
            return redirect()->route('teacher.dashboard');
        }

        $student = Student::where('email', $request->email)->first();
        if ($student && Hash::check($request->password, $student->password)) {

            session(['student' => $student]);
            return redirect()->route('student.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }

 
       public function logout()
{
    session()->forget('teacher');
    session()->forget('student');
    return redirect('/login');
}
    


    public function showStudentRegister()
    {
        return view('auth.register-student');
    }

 
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

        $student= Student::create([
            'sid' => $request->sid,
            'sname' => $request->sname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'yearLevel' => $request->yearLevel,
            'password' => Hash::make($request->password)
        ]);
         session(['student' => $student]);
        return redirect()->route('student.dashboard')->with('success', 'Student registered successfully!');
    }


    public function showTeacherRegister()
    {
        return view('auth.register-teacher');
    }


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

        $teacher= Teacher::create([
            'tid' => $request->tid,
            'tname' => $request->tname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'specialization' => $request->specialization,
            'password' => Hash::make($request->password)
        ]);
        session(['teacher'=> $teacher]);
        return redirect()->route('teacher.dashboard')->with('success', 'Teacher registered successfully!');
    }
}