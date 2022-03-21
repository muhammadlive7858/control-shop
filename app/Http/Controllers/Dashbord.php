<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashbord extends Controller
{
    public function index(){
        return view('admin.indexMain');
    }
}
