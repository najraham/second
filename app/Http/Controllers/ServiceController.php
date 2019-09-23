<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function editService(Request $request){
        $service = Service::find($request->input('edit-id'));

        $service->title = $request->input('edit-title');
        $service->description = $request->input('edit-description');
        $service->save();

        return redirect()->back();
    }

    public function deleteService($id){
        $row = Service::find($id);
        $row->delete();
    }

    public function addService(Request $request){
        $row = new Service();

        $row->title = $request->input('title');
        $row->description = $request->input('description');
        $row->icon = "flaticon";

        $row->save();

        return redirect()->back();
    }
}
