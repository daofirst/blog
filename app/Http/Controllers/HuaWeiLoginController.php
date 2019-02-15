<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuaWeiLoginController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        return view('hw_login.index');
    }

    public function handleTransit (Request $request) {

        dd(1212);

        return view('hw_login.handle_transit');
    }
}
