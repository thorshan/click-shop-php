<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // All products route
    public function index(){
        return view('index');
    }

    // All stores route
    public function allStores(){
        return view('all.stores.index',[
            'stores' => Store::all()
        ]);
    }

    // Show Individual Store
    public function storePage(Store $store){
        return view('all.stores.show',[
            'store' => Store::find($store->id)
        ]);
    }

    // Sell Product Route
    public function sellProduct(){
        return view('sell');
    }

    // Sell Applications
    public function sellApply(){
        return view('apply');
    }
}
