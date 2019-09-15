<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Service;
use App\Project;
use App\Testimony;
use App\ContactInfo;

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
        $index = Index::first();
        $services = Service::all();
        $service_count = 1;
        $projects = Project::all();
        $testimonies = Testimony::all();
        // projects
        return view('frontend.pages.about')->with([
            'index' => $index,
            'services' => $services,
            'service_count' => $service_count,
            'projects' => $projects,
            'testimonies' => $testimonies,
        ]);
    }

    public function show_contact(){
        $contact = ContactInfo::first();
        return view('frontend.pages.contact')->with([
            'contact' => $contact,
        ]);
    }

    public function show_work(){
        $projects = Project::all();
        return view('frontend.pages.work')->with([
            'projects' => $projects,
        ]);
    }

    public function show_single_work(){
        return view('frontend.pages.single');
    }
}
