<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index(){
//        $user = new User();
//        if(auth()->user()->hasRole('Admin')){
//            $user = DB::table('users')->get();
////            $user->get()->hasRole('Admin');
//            dd($user);
//            echo $user;
//        }else{
//            echo "n";
//        }
//       return $user->hasRole('Admin');
//        return User::hasRole('Admin');
return " i am in user controller index fun";
    }
}
