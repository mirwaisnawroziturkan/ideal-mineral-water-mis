<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
    public function sales() {
        $sales = Sale::all();
        return view('sales', ['sales' => $sales]);
    }

    public function store(Request $request) {
        $sale = new Sale();
        $sale->free_bottle = $request->input('free_bottle');
        $sale->full_bottle = $request->input('full_bottle');
        $sale->sale_bottle = $request->input('sale_bottle');
        $sale->quantity = $request->input('quantity');
        $sale->bottle_price = $request->input('bottle_price');
        $sale->total_price = $request->input('total_price');
        $sale->remain_amount = $request->input('remain_amount');
        $sale->save();
        return redirect('sales');
    }

    public function destroy($id) {
        $sale = Sale::findOrFail($id);
        $sale->delete();
        return redirect()->back();
    }
}

