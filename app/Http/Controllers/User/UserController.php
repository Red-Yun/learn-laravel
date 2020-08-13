<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    //
    public function userList(){
        $result = DB::table('laravel')->get();
        foreach($result as $user){
            var_dump($user->name);
        }
        dd('结束');
    }

    public function sel(){
        return view('User/add');
    }
}
