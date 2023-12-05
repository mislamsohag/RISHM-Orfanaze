<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SyllabusController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'Home']);
Route::get('/home', [HomeController::class, 'Home']);
Route::get('/employee', [EmployeesController::class, 'Employee']);
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
