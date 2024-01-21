<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function Students(){
        return view("pages.studentInfo");
    }
}
