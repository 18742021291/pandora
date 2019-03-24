<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index(){
        $collects=array();
        return view('admin.dashboard.index',compact('collects'));
    }
}
