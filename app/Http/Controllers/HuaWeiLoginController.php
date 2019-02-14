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
    public function index()
    {
        return view('hw_login.index');
    }
}
