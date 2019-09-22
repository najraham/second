<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Project;

class ProjectController extends Controller
{

    // project

    public function editProject(Request $request){
        $project = Project::find($request->input('edit-id'));

        $project->title = $request->input('edit-title');
        $project->description = $request->input('edit-description');
        $project->link = $request->input('edit-link');

        if($request->hasFile('edit-image'))
        {
            // Get filename with the extension
            $filenameWithExt = $request->file('edit-image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('edit-image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('edit-image')->storeAs('public/backend/images', $fileNameToStore);

            $project->image = $fileNameToStore;
        }

        $project->save();

        return redirect()->back();
    }

    public function addProject(Request $request){
        $project = new Project();

        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->link = $request->input('link');

        if($request->hasFile('image'))
        {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/backend/images', $fileNameToStore);

            $project->image = $fileNameToStore;
        }
        else{
            $project->image = "nofile";
        }

        $project->save();

        return redirect()->back();
    }

    public function deleteProject($id){
        $project = Project::find($id);

        Storage::delete('/public/backend/images/'.$project->image);
        $project->delete();

        return redirect()->back();
    }

    // project end
}
