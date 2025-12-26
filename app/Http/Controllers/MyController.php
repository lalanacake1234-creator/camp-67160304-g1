<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvalue;
    protected $myvalue2;
    public $myval = "";
    // Constructor
    // MyController()
    function __construct(){

    }

    function index(){
        return view('myview.index');
    }

    function info(Request $req){
        return view('myview.info');
    }

    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate', $data);
    }

   function saveData(Request $r){
    return view('result', [
        'fname'   => $r->fname,
        'lname'   => $r->lname,
        'dob'     => $r->dob,
        'age'     => $r->age,
        'gender'  => $r->gender,
        'address' => $r->address,
        'color'   => $r->color,
        'music'   => $r->music,
    ]);
}
}
