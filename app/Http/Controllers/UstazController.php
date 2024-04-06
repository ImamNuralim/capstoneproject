<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UstazController extends Controller
{
    public function index(){
        return view('dashboard.ustaz.index');
    }
}
