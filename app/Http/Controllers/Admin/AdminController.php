<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index(){
        $collects=array();
        return view('admin.dashboard.index',compact('collects'));
    }
}
