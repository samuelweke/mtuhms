<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    //Dashboard
    public function dashboard(){
        return view('patient.dashboard');
    }


    //Appointment
    public function appointment(){
        return view('patient.appointment');
    }


    //Prescription
    public function prescription(){
        return view('patient.prescription');
    }


    //Report
    public function report(){
        return view('patient.report');

    }


    //Profile
    public function profile(){
        return view('patient.profile');

    }

}
