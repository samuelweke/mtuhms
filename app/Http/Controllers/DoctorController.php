<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    
    //Dashboard
    public function dashboard(){
        return view('doctor.dashboard');
    }

    //Appointment
    public function appointment(){
        return view('doctor.appointment');
    }
    

    //Patient
    public function patient(){
        return view('doctor.patient');
    }
    
    //Report
    public function report(){
        return view('doctor.report');

    }


    //Profile
    public function profile(){
        return view('doctor.profile');

    }
}
