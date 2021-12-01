<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakAdmin extends Controller
{
    //
    public function index(){
        return view('admin/dataKontak');
    }
}
