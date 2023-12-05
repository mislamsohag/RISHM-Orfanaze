<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    function OnlineAdmission(){
        return view("Components.Pages.Admission.onlineAdmission");
    }
    function AdmissionForm(){
        return view("Components.Pages.Admission.admissionFormPrint");
    }
    function UpdateApplication(){
        return view("Components.Pages.Admission.updateApplication");
    }
    function AdmissionResult(){
        return view("Components.Pages.Admission.admissionResult");
    }
}
