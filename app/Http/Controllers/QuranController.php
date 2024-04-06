<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surah;

class QuranController extends Controller
{
    public function quran()
    {
        return view('user.kitab.surah');
}
}
