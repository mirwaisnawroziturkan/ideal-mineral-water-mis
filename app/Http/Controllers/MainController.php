<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mainpage(){
        return view('mainpage');
    }
    public function admins(){
        return view('admins');
    }
    public function employies(){
        return view('employies');
    }

}
