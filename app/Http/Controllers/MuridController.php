<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index(){
        return view('dashboard.murid.index');
    }
}
