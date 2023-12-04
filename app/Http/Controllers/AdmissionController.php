<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    function Admission(){
        return view("Components.Pages.Admission.admission");
    }
}
