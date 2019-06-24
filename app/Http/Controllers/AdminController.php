<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function doctor(){
        return view('admin.doctor');
    }

    public function patient(){
        return view('admin.patient');
    }

    public function nurse(){
        return view('admin.nurse');
    }

    public function bed(){
        return view('admin.bed');
    }

     public function profile(){
        return view('admin.profile');
    }
}
 