<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function addUser(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = \Hash::make($request->input('password'));
        $user->type = $request->input('type');
        // $user->image = $request->input('image');
        $user->save();

        return redirect()->back();
    }

    public function editUser(Request $request){
        $user = User::find($request->input('edit-id'));

        $user->name = $request->input('edit-name');
        $user->email = $request->input('edit-email');
        $user->type = $request->input('edit-type');

        $user->save();

        return redirect()->back();
    }

    public function deleteUser($id){
        $row = User::find($id);

        $row->delete();
    }
}
