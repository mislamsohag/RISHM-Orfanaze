<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\TokenVerificationMiddlewaer;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\DonateHomeController;

Route::get('/dashboard', [UsersController::class, 'dashboard']);
Route::get('/passwordResetPage', [UsersController::class, 'PasswordResetPage']);
//Users
Route::get('/registrationPage', [UsersController::class, 'RegistrationPage']);
Route::post('/userRegistration', [UsersController::class, 'UserRegistration']);
Route::get('/loginPage', [UsersController::class, 'LoginPage']);
Route::post('/userLogin', [UsersController::class, 'UserLogin']);
Route::post('/sendOTPCode', [UsersController::class, 'SendOTPCode']);
Route::post('/verifyOTP', [UsersController::class, 'VerifyOTP']);
Route::delete('/logout', [UsersController::class, 'UserLogout']);

Route::post('/resetPassword', [UsersController::class, 'ResetPassword'])->middleware([TokenVerificationMiddlewaer::class]);

//Classes
// Route::get('/classList', [ClasseController::class, 'ClassPage']);
Route::post('/classeCreate', [ClasseController::class, 'ClasseCreate']);
Route::post('/classUpdate', [ClasseController::class, 'Update']);
Route::get('/classDestroy/{id}', [ClasseController::class, 'Destroy']);

// Group Routes
Route::post('/groupCreate', [GroupController::class, 'GroupCreate']);
Route::post('/groupUpdate', [GroupController::class, 'GroupUpdate']);

// Subjects Routes
Route::post('/subjectCreate', [SubjectsController::class, 'SubjectCreate']);
// Route::post('/subjectUpdate', [SubjectsController::class, 'SubjectUpdate']);

// Employees Routes
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employeeStorePage', [EmployeeController::class, 'create']);
Route::post('/employeeCreate', [EmployeeController::class, 'store']);
Route::post('/employeeUpdate', [EmployeeController::class, 'update']);
Route::delete('/employeeDelete/{id}', [EmployeeController::class, 'EmployeeDelete']);

//teachers
Route::post('/teacherCreate', [TeacherController::class, 'TeacherCreate']);
Route::post('/teacherUpdate', [TeacherController::class, 'TeacherUpdate']);
Route::delete('/teacherDelete/{id}', [TeacherController::class, 'TeacherDelete']);


Route::get('/', [HomeController::class, 'Home']);
Route::get('/home', [HomeController::class, 'Home']);
Route::get('/students', [StudentsController::class, 'Students']);
Route::get('/notice', [NoticeController::class, 'Notices']);

Route::controller(ResultController::class)->group(function () {
    Route::get('/termResult', 'TerminalResult');
    Route::get('/tutorialResult', 'TutorialResult');
    Route::get('/boardResult', 'BoardResult');
    Route::get('/pdfResult', 'PDFResult');
});

Route::get('/syllabus', [SyllabusController::class, 'Syllabus']);
Route::get('/examroutine', [RoutineController::class, 'ExamRoutine']);
Route::get('/classrRoutine', [RoutineController::class, 'ClassRoutine']);
Route::get('/gallery', [GalleryController::class, 'Gallery']);

Route::group(["prefix" => "gallery"], function () {
    Route::get("/ceremony", [GalleryController::class, "Ceremony"]);
    Route::get("/programme", [GalleryController::class, "Programme"]);
    Route::get("/visit", [GalleryController::class, "Visit"]);
    Route::get("/sports", [GalleryController::class, "Sports"]);
});
Route::group(["prefix" => "admission"], function () {
    Route::get("/onlineAdmission", [AdmissionController::class, "OnlineAdmission"]);
    Route::get("/admissionForm", [AdmissionController::class, "AdmissionForm"]);
    Route::get("/updateApplication", [AdmissionController::class, "UpdateApplication"]);
    Route::get("/admissionResult", [AdmissionController::class, "AdmissionResult"]);
});

Route::get("/contact", [ContactController::class, "Contact"]);
Route::get("/donateHome", [DonateHomeController::class, "donateHome"]);

