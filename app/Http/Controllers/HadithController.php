<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HadithController extends Controller
{
    public function hadith()
    {
        $response = Http::get('https://api.hadith.gading.dev/books/muslim?range=1-150');

        $hadithData = $response->json();

        if ($response->successful()) {


            return view('user.kitab.hadith', ['hadithData' => $hadithData]);
        } else {

            return view('hadith', ['error' => 'Failed to fetch hadith data.']);
        }
    }

}
