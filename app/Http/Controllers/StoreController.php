<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function index(){
        $stores = Store::all();
        return view('stores.index', compact('stores'));
    }
    
    public function show(Store $store){
        return view('stores.show', compact('store'));
    }
}
