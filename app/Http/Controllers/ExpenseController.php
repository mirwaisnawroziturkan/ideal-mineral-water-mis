<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
class ExpenseController extends Controller
{
    public function expenses(){
        $expenses = Expense::all();
        return view('expenses', ['expenses'=> $expenses]);
    }
    public function store(){
        $expense = new Expense();
        $expense->description = request('description');
        $expense->quantity = request('quantity');
        $expense->unit_amount = request('unit_amount');
        $expense->total_amount = request('total_amount');
        $expense->save();
        return redirect('expenses');
    }
    public function destroy($id){
        $expense = Expense::find($id);
        $expense->delete();
        return \redirect()->back();
    }
    
}
