<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show_index(){
        return view('frontend.pages.index');
    }

    public function show_about(){
        return view('frontend.pages.about');
    }

    public function show_contact(){
        return view('frontend.pages.contact');
    }

    public function show_work(){
        return view('frontend.pages.work');
    }

    public function show_single_work(){
        return view('frontend.pages.single');
    }
}
