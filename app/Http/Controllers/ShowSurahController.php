<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowSurahController extends Controller
{
    public function quran()
    {
        return view('kitab.showsurah');
}
}
