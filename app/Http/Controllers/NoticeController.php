<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function Notices(){
        return view("pages.Notices.notice");
    }
}
