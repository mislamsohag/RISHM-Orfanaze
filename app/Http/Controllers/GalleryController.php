<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function Gallery(){
        return view("pages.Gallery.gallery");
    }
    public function Ceremony(){
        return view("pages.Gallery.PhotosLink.ceremony");
    }
    public function Programme(){
        return view("pages.Gallery.PhotosLink.programme");
    }
    public function Visit(){
        return view("pages.Gallery.PhotosLink.visit");
    }
    public function Sports(){
        return view("pages.Gallery.PhotosLink.sports");
    }
}
