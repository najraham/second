<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Project;
use App\Service;
use App\Testimony;
use App\User;
use App\ContactInfo;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function show_dashboard(){
        if (Auth::user()->type == 1){
            $title = "dashboard";
            $users = User::all();
            $projects = Project::all();
            $services = Service::all();
            $testimonies = Testimony::all();

            return view('backend.pages.dash')->with([
                'title' => $title,
                'users' => $users,
                'projects' => $projects,
                'services' => $services,
                'testimonies' => $testimonies,
            ]);
        }
        else{
            return redirect('/');
        }
    }

    public function show_dashboard_index(){
        if (Auth::user()->type == 1){
            $title = "index";
            $index = Index::first();

            return view('backend.pages.index')->with([
                'title' => $title,
                'index' => $index,
            ]);
        }
        else{
            return redirect('/');
        }

    }

    public function show_dashboard_about(){
        if (Auth::user()->type == 1){
            $title = "about";
            return view('backend.pages.about')->with([
                'title' => $title,
            ]);
        }
        else{
            return redirect('/');
        }
    }

    public function show_dashboard_work(){
        if (Auth::user()->type == 1){
            $title = "work";
            return view('backend.pages.work')->with([
                'title' => $title,
            ]);
        }
        else{
            return redirect('/');
        }
    }

    public function show_dashboard_project(){
        if (Auth::user()->type == 1){
            $title = "projects";
            $projects = Project::all();
            return view('backend.pages.project')->with([
                'title' => $title,
                'projects' => $projects,
            ]);
        }
        else{
            return redirect('/');
        }
    }

    public function show_dashboard_service(){
        if (Auth::user()->type == 1){
            $services = Service::all();
            $title = "services";
            $rows = Service::select('id', 'icon')->get();

            return view('backend.pages.services')->with([
                'services' => $services,
                'title' => $title,
                'rows' =>$rows,
            ]);
        }
        else{
            return redirect('/');
        }
    }

    public function show_dashboard_testimony(){
        if (Auth::user()->type == 1){
            $title = "testimonies";
            $testimonies = Testimony::all();

            return view('backend.pages.testimony')->with([
                'title' =>$title,
                'testimonies' =>$testimonies,
            ]);
        }
        else{
            return redirect('/');
        }
    }

    public function show_dashboard_user($filter){
        if (Auth::user()->type == 1){
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
        else{
            return redirect('/');
        }
    }

    public function show_dashboard_contact(){
        if (Auth::user()->type == 1){
            $title = "contact";
            $contact = ContactInfo::first();

            return view('backend.pages.contact')->with([
                'title' => $title,
                'contact' => $contact,
            ]);
        }
        else{
            return redirect('/');
        }
    }
}
