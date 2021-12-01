<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataBukuAdmin extends Controller
{
    //
    public function index(){
        return view('admin/dataBuku');
    }
}
