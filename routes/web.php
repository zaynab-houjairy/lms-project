<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\StudentCourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

// ----- Login -----
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// ----- Register Student -----
Route::get('/register/student', [AuthController::class, 'showStudentRegister'])->name('register.student');
Route::post('/register/student', [AuthController::class, 'registerStudent'])->name('register.student.post');

// ----- Register Teacher -----
Route::get('/register/teacher', [AuthController::class, 'showTeacherRegister'])->name('register.teacher');
Route::post('/register/teacher', [AuthController::class, 'registerTeacher'])->name('register.teacher.post');

// ----- Dashboards -----
Route::get('/student/dashboard', fn() => view('auth.student-dashboard'))->name('student.dashboard');
Route::get('/teacher/dashboard', fn() => view('auth.teacher-dashboard'))->name('teacher.dashboard');
// ----- Logout -----
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// ----- Course Details ----
Route::get('/student/courses', [StudentCourseController::class, 'index'])->name('student.courses');
Route::get('/student/courses/{id}', [StudentCourseController::class, 'show'])->name('student.course.detail');