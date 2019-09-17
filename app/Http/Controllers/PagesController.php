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
        $contact = ContactInfo::first();
        $banner_images = explode(',' , $index->banner_image);
        // return $banner_images;
        return view('frontend.pages.index')->with([
            'index' => $index,
            'services' => $services,
            'service_count' => $service_count,
            'projects' => $projects,
            'project_count' => $project_count,
            'contact' => $contact,
            'banner_images' => $banner_images,
            ]);
    }

    public function show_about(){
        $index = Index::first();
        $services = Service::all();
        $service_count = 1;
        $projects = Project::all();
        $testimonies = Testimony::all();
        $contact = ContactInfo::first();
        return view('frontend.pages.about')->with([
            'index' => $index,
            'services' => $services,
            'service_count' => $service_count,
            'projects' => $projects,
            'testimonies' => $testimonies,
            'contact' => $contact,
        ]);
    }

    public function show_contact(){
        $index = Index::first();
        $contact = ContactInfo::first();
        return view('frontend.pages.contact')->with([
            'contact' => $contact,
            'index' => $index,
        ]);
    }

    public function show_work(){
        $index = Index::first();
        $projects = Project::all();
        $contact = ContactInfo::first();
        return view('frontend.pages.work')->with([
            'projects' => $projects,
            'contact' => $contact,
            'index' => $index,
        ]);
    }

    public function show_single_work(){
        $index = Index::first();
        $contact = ContactInfo::first();
        return view('frontend.pages.single');
    }

    // backend

    public function show_dashboard(){
        $title = "dashboard";
        return view('backend.pages.dash')->with([
            'title' => $title,
        ]);
    }

    public function show_dashboard_index(){

    }
}
