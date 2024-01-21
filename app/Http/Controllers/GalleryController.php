<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function Gallery(){
        return view("pages.galleryees.gallery");
    }
    public function Ceremony(){
        return view("pages.galleryees.ceremony");
    }
    public function Programme(){
        return view("pages.galleryees.programme");
    }
    public function Visit(){
        return view("pages.galleryees.visit");
    }
    public function Sports(){
        return view("pages.galleryees.sports");
    }
}
