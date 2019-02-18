<?php

namespace App\Http\Controllers\Web;

class ShopController extends Controller {

    public function index () {
        
        return view('web.shop.index');
    }
}