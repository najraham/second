<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Project;
use App\Service;

class DashboardController extends Controller
{
    public function show_dashboard(){
        $title = "dashboard";
        return view('backend.pages.dash')->with([
            'title' => $title,
        ]);
    }

    public function show_dashboard_index(){
        $title = "index";
        $index = Index::first();

        return view('backend.pages.index')->with([
            'title' => $title,
            'index' => $index,
        ]);
    }

    public function show_dashboard_about(){
        $title = "about";
        return view('backend.pages.about')->with([
            'title' => $title,
        ]);
    }

    public function show_dashboard_work(){
        $title = "work";
        return view('backend.pages.work')->with([
            'title' => $title,
        ]);
    }

    public function show_dashboard_project(){
        $title = "projects";
        $projects = Project::all();
        return view('backend.pages.project')->with([
            'title' => $title,
            'projects' => $projects,
            ]);
    }

    public function show_dashboard_service(){
        $services = Service::all();
        $title = "services";

        return view('backend.pages.services')->with([
            'services' => $services,
            'title' => $title,
        ]);
    }
}