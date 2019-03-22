<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('users.setting');
    }

    public function save(Request $request){
        \Auth::user()->setting()->merge($request->all());
        return back();
    }


}
