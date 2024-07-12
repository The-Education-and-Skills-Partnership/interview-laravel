<?php

namespace App\Http\Controllers;

use App\Models\Store;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::paginate(10);
        return view('store.index', compact('stores'));
    }
    public function get($id)
    {
        $store = Store::findOrFail($id);
        return view('store.single', compact('store'));
    }
    public function edit($id)
    {
        $store = Store::findOrFail($id);
        return view('store.edit', compact('store'));
    }

}
