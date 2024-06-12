<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employie;

class EmployeeController extends Controller
{
    public function employies(){
        $employies = Employie::all();
        return view('employies', ['employies'=>$employies]);
    }
    public function store(){
        $employie = new Employie();
        $employie->name = request('name');
        $employie->address = request('address');
        $employie->phone = request('phone');
        $employie->position = request('position');
        $employie->status = request('status');
        $employie->salary = request('salary');
        $employie->save();
        return \redirect('employies');
    }
    public function destroy($id){
        $employie = Employie::find($id);
        $employie->delete();
        return redirect()->back();
    }
}
