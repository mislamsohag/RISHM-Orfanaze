<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateHomeController extends Controller
{
    public function donateHome(){
        return view("donateHome");
    }
}
