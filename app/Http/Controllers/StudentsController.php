<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function Students(){
        return view("Components.Pages.Students.studentInfo");
    }
}
