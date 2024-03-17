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

        // Check if the request is successful
        if ($response->successful()) {
            // You can use dd() to check the data received
            // dd($hadithData);

            // If you want to pass the data to a view, you can return the view with the data
            return view('user.hadits.index', ['hadithData' => $hadithData]);
        } else {
            // Handle error if the request is not successful
            return view('hadith', ['error' => 'Failed to fetch hadith data.']);
        }
    }

    public function surah()
    {
        // Replace the API URL with your actual API URL
        $apiUrl = 'https://equran.id/api/v2/surat';

        // Make an HTTP request to the API
        $response = Http::get($apiUrl);

        // Check if the request was successful (status code 200)
        if ($response->successful()) {
            // Get the data from the response
            $surahData = $response->json();

            // dd($surahData);

            // Return the view with the surah data
            return view('surah', ['surahData' => $surahData]);
        } else {
            // If the request was not successful, handle the error
            return view('surah', ['error' => 'Failed to fetch surah data']);
        }
    }
    // public function surah()
    // {
    //     // Replace the API URL with your actual API URL
    //     $apiUrl = 'https://equran.id/api/v2/surat';

    //     // Make an HTTP request to the API
    //     $response = Http::get($apiUrl);

    //     // Check if the request was successful (status code 200)
    //     if ($response->successful()) {
    //         // Get the data from the response
    //         $surahData = $response->json();

    //         // dd($surahData);

    //         // Take only the first 5 surahs
    //         $limitedSurahData = array_slice($surahData['data'], 0, 5);

    //         // Return the view with the limited surah data
    //         return view('surah', ['surahData' => ['data' => $limitedSurahData]]);
    //     } else {
    //         // If the request was not successful, handle the error
    //         return view('surah', ['error' => 'Failed to fetch surah data']);
    //     }
    // }

}
