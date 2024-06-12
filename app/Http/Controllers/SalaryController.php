<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;

class SalaryController extends Controller
{
    public function salaries(){
        $salaries = Salary::all();
        return view('salaries', ['salaries'=>$salaries]);
    }
    public function store(){
        $salary = new Salary();
        $salary->employee_id = request('employee_id');
        $salary->mount = request('mount');
        $salary->bonus_salary = request('bonus_salary');
        $salary->net_salary = request('net_salary');
        $salary->remain_salary = request('remain_salary');
        $salary->total_salary = request('total_salary');
        $salary->save();
        return redirect('salaries');
    }
    public function destroy($id){
        $salary = Salary::find($id);
        $salary->delete();
        return redirect()->back();
    }
}
