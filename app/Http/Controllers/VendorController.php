<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function vendors(){
        $vendors = Vendor::all();
        return view('vendors', ['vendors' => $vendors]);
    }
    public function store(){
        // error_log(request('name'));
        $vendor = new Vendor();
        $vendor->name = request('name');
        $vendor->address = request('address');
        $vendor->phone = request('phone');
        $vendor->type = request('type');
        $vendor->salary = request('salary');
        $vendor->save();
        return redirect('/vendors');
    }
    public function destroy($id){
        $vendor = Vendor::find($id);
        $vendor->delete();
        return redirect()->back();
    }
}
