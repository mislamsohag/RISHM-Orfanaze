<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'Home']);
Route::get('/home', [HomeController::class, 'Home']);
Route::get('/employee', [EmployeesController::class, 'Employee']);
Route::get('/students', [StudentsController::class, 'Students']);
Route::get('/notice', [NoticeController::class, 'Notices']);
Route::get('/admission', [AdmissionController::class, 'Admission']);
