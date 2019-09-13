<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Service;
use App\Project;

class PagesController extends Controller
{
    public function show_index(){
        $index = Index::first();
        $services = Service::all();
        $service_count = 1;
        $projects = Project::all();
        $project_count = 1;
        return view('frontend.pages.index')->with([
            'index' => $index,
            'services' => $services,
            'service_count' => $service_count,
            'projects' => $projects,
            'project_count' => $project_count,
            ]);
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
