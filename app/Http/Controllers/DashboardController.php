<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Project;
use App\Service;
use App\Testimony;
use App\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function __construct(){
    //     $this->middleware(auth);
    // }
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
        $rows = Service::select('id', 'icon')->get();

        return view('backend.pages.services')->with([
            'services' => $services,
            'title' => $title,
            'rows' =>$rows,
        ]);
    }

    public function show_dashboard_testimony(){
        $title = "testimonies";
        $testimonies = Testimony::all();

        return view('backend.pages.testimony')->with([
            'title' =>$title,
            'testimonies' =>$testimonies,
        ]);
    }

    public function show_dashboard_user($filter){
        $title = "users";
        if($filter == 'ALL') {
            $users = User::all();
        }
        elseif($filter == 'ADMIN') {
            $users = User::where('type', 1)->get();
        }
        else {
            $users = User::where('type', '!=', 1)->get();
        }

        return view('backend.pages.user')->with([
            'title' => $title,
            'users' => $users,
            'filter' => $filter,
        ]);
    }
}
