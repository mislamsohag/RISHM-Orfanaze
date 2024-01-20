<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    function OnlineAdmission(){
        return view("pages.Admission.onlineAdmission");
    }
    function AdmissionForm(){
        return view("pages.Admission.admissionFormPrint");
    }
    function UpdateApplication(){
        return view("pages.Admission.updateApplication");
    }
    function AdmissionResult(){
        return view("pages.Admission.admissionResult");
    }
}
