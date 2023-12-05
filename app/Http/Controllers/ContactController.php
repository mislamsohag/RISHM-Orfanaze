<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact(){
        return view("Components.Pages.Contact.contact");
    }
}
