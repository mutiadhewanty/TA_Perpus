<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanAdmin extends Controller
{
    public function index(){
        return view('admin/dataPeminjaman');
    }
}
