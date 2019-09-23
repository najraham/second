<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;

class TestimonyController extends Controller
{
    public function editTestimony(Request $request){
        $row = Testimony::find($request->input('edit-id'));

        $row->saying = $request->input('edit-saying');
        $row->save();

        return redirect()->back();
    }

    public function addTestimony(Request $request){
        $row = new Testimony();

        $row->saying = $request->input('saying');
        $row->save();

        return redirect()->back();
    }

    public function deleteTestimony($id){
        $row = Testimony::find($id);

        $row->delete();
    }
}
