<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surah;
use Illuminate\Support\Facades\Http;

class QuranController extends Controller
{
    public function index()
    {
        // Ambil data dari URL eksternal
        $response = Http::get('https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json');

        // Decode response JSON menjadi array
        $data = $response->json();

        // Loop melalui data dan simpan ke dalam basis data menggunakan model
        foreach ($data as $surahData) {
            Surah::create([
                'name' => $surahData['name'],
                'name_translations' => $surahData['name_translations']
            ]);
        }

        // Ambil semua data surah dari basis data
        $surahs = Surah::all();

        // Kembalikan data dalam bentuk response JSON
        return response()->json($surahs);
    }
}
