<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Index;

class IndexController extends Controller
{
    // index

    public function editIndex(Request $request){
        $index = Index::find($request->input('id'));
        $index->title = $request->input('title');
        $index->description = $request->input('description');
        $index->save();

        return [
            'index' => $index,
            'message' => "Changes saved!!",
            ];
    }

    // index end

    // banner image

    public function editImage(Request $request){
        $key = $request->input('key');
        $row = Index::select('id' , 'banner_image')->first();
        $images = $row->banner_image;

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

            Storage::delete('/public/backend/images/'.$images[$key]);

            $images[$key] = $fileNameToStore;
            $row->banner_image = $images;
            $row->save();
        }

        return redirect()->back();

    }

    public function deleteImage($i){
        $row = Index::select('id' , 'banner_image')->first();
        $images = $row->banner_image;

        Storage::delete('/public/backend/images/'.$images[$i]);
        unset($images[$i]);
        $row->banner_image = $images;

        $row->save();
    }

    public function addImage(Request $request){
        $row = Index::select('id' , 'banner_image')->first();
        $keys = array_keys($row->banner_image);
        if(count($keys)>0){
            $key = max($keys);
        }
        else{
            $key = 0;
        }
        // return $key;
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

            $img_array = $row->banner_image;
            $img_array[$key+1] = $fileNameToStore;
            $row->banner_image = $img_array;

            $row->save();
        }

        return redirect()->back();
    }

    // banner image end
}
