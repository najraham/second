<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function showUserTable($type){
        if ($type==0) {
            $users = User::all();
        }
        elseif($type==1) {
            $users = User::where('type', 1)->get();
        }
        else{
            $users = User::where('type', '!=', 1)->get();
        }
        return [$users];
    }
}
