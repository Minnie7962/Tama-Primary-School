<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AssignmentsController;
use App\Http\Controllers\AttendancesController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\MarksController;
use App\Http\Controllers\NoticesController;
use App\Http\Controllers\RoutinesController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SyllabusesController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\SessionMessagesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\SchoolSessionController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\UpdatePasswordController;

// Authentication Routes (Manually Defined)
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Protected Routes (Require Authentication)
Route::middleware(['auth'])->group(function () {
    // Home
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Messages
    Route::get('/session-messages', [SessionMessagesController::class, 'index'])->name('session.messages');

    // School-related routes
    Route::prefix('school')->name('school.')->group(function () {
        Route::post('session/create', [SchoolSessionController::class, 'store'])->name('session.store');
        Route::post('semester/create', [SemesterController::class, 'store'])->name('semester.create');
        Route::post('class/create', [ClassesController::class, 'store'])->name('class.create');
        Route::post('section/create', [SectionsController::class, 'store'])->name('section.create');
    });

    // Assignments
    Route::get('/assignments', [AssignmentsController::class, 'index'])->name('assignments.index');
    Route::get('/assignments/create', [AssignmentsController::class, 'create'])->name('assignments.create');

    // Attendances
    Route::get('/attendances', [AttendancesController::class, 'index'])->name('attendances.index');
    Route::get('/attendances/take', [AttendancesController::class, 'take'])->name('attendances.take');
    Route::get('/attendances/view', [AttendancesController::class, 'view'])->name('attendances.view');
    Route::get('/attendances/attendance', [AttendancesController::class, 'attendance'])->name('attendances.attendance');

    // Classes
    Route::get('/classes', [ClassesController::class, 'index'])->name('classes.index');
    Route::get('/classes/edit/{id}', [ClassesController::class, 'edit'])->name('classes.edit');

    // Courses
    Route::get('/courses/edit/{id}', [CoursesController::class, 'edit'])->name('courses.edit');
    Route::get('/courses/student', [CoursesController::class, 'student'])->name('courses.student');
    Route::get('/courses/teacher', [CoursesController::class, 'teacher'])-> name('courses.teacher');

    // Events
    Route::get('/events', [EventsController::class, 'index'])->name('events.index');

    // Exams
    Route::get('/exams', [ExamsController::class, 'index'])->name('exams.index');
    Route::get('/exams/create', [ExamsController::class, 'create'])->name('exams.create');
    Route::get('/exams/edit-rule', [ExamsController::class, 'editRule'])->name('exams.edit-rule');
    Route::get('/exams/history', [ExamsController::class, 'history'])->name('exams.history');
    Route::get('/exams/view-rule', [ExamsController::class, 'viewRule'])->name('exams.view-rule');

    // Grade
    Route::get('/exams/grade/add-rule', [GradeController::class, 'addRule'])->name('exams.grade.add-rule');
    Route::get('/exams/grade/create', [GradeController::class, 'create'])->name('exams.grade.create');
    Route::get('/exams/grade/view', [GradeController::class, 'view'])->name('exams.grade.view');
    Route::get('/exams/grade/view-rules', [GradeController::class, 'viewRules'])->name('exams.grade.view-rules');

    // Marks
    Route::get('/marks/create', [MarksController::class, 'create'])->name('marks.create');
    Route::get('/marks/results', [MarksController::class, 'results'])->name('marks.results');
    Route::get('/marks/student', [MarksController::class, 'student'])->name('marks.student');
    Route::get('/marks/submit-final-marks', [MarksController::class, 'submitFinalMarks'])->name('marks.submit-final-marks');
    Route::get('/marks/view', [MarksController::class, 'view'])->name('marks.view');

    // Notices
    Route::get('/notices/create', [NoticesController::class, 'create'])->name('notices.create');

    // Routines
    Route::get('/routines/create', [RoutinesController::class, 'create'])->name('routines.create');
    Route::get('/routines/show', [RoutinesController::class, 'show'])->name('routines.show');

    // Sections
    Route::get('/sections/edit/{id}', [SectionsController::class, 'edit'])->name('sections.edit');

    // Students
    Route::get('/students/add', [StudentsController::class, 'add'])->name('students.add');
    Route::get('/students/edit/{id}', [StudentsController::class, 'edit'])->name('students.edit');
    Route::get('/students/list', [StudentsController::class, 'list'])->name('students.list');
    Route::get('/students/profile/{id}', [StudentsController::class, 'profile'])->name('students.profile');

    // Syllabi
    Route::get('/syllabi/create', [SyllabusesController::class, 'create'])->name('syllabi.create');
    Route::get('/syllabi/show', [SyllabusesController::class, 'show'])->name('syllabi.show');

    // Teachers
    Route::get('/teachers/add', [TeachersController::class, 'add'])->name('teachers.add');
    Route::get('/teachers/edit/{id}', [TeachersController::class, 'edit'])->name('teachers.edit');
    Route::get('/teachers/list', [TeachersController::class, 'list'])->name('teachers.list');
    Route::get('/teachers/profile/{id}', [TeachersController::class, 'profile'])->name('teachers.profile');

    // Password update
    Route::get('password/edit', [UpdatePasswordController::class, 'edit'])->name('password.edit');
    Route::post('password/edit', [UpdatePasswordController::class, 'update'])->name('password.update');
});
