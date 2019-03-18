<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Qcloud\Cos\Client;
class IndexController extends Controller
{
    public function index(){
        $questions=array();
        return view('index', compact('questions'));
    }
    public $cosClient;
    //
    public function init()
    {
        $this->cosClient = new Client(array(
            'region'      => env('COS_REGION'),
            'schema'      => 'https', //协议头部，默认为http
            'credentials' => array(
                'secretId'  => env('COS_SECRET_ID'),
                'secretKey' => env('COS_KEY'),
            ),
        ));
    }
}
