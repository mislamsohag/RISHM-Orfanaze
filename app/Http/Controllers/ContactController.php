<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function Contact(){
        return view('pages.contact');
    }
}
