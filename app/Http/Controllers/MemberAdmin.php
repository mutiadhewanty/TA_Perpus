<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberAdmin extends Controller
{
    public function index(){
        return view('admin/dataMember');
    }
}
