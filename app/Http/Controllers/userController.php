<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function store(){
        $user = new User();
        $user->name = request('txt_uname');
        $user->password = request('txt_pwd');
        $user->email = request('txt_email');
        $user->save();

        return back();
    }
}
