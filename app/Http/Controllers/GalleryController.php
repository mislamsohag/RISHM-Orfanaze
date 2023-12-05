<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function Gallery(){
        return view("Components.Pages.Gallery.gallery");
    }
    public function Ceremony(){
        return view("Components.Pages.Gallery.PhotosLink.ceremony");
    }
    public function Programme(){
        return view("Components.Pages.Gallery.PhotosLink.programme");
    }
    public function Visit(){
        return view("Components.Pages.Gallery.PhotosLink.visit");
    }
    public function Sports(){
        return view("Components.Pages.Gallery.PhotosLink.sports");
    }
}
