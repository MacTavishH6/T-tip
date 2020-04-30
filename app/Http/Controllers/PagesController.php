<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        if(!Session::get('id')){
            return redirect('/login');
        }
        $user = new User();
        $user->nama = Session::get('nama');
        $user->id = Session::get('id');
        // Session::flush();
        // dd($data);
        return view('master.homepage.index',compact('user'));
    }

    public function profile(){
        return view('master.profile.profile');
    }
}
