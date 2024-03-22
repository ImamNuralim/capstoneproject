<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman dashboard
        return view('dashboard.dashboard');
    }

    public function show($id)
    {
        // Logika untuk menampilkan data dengan ID tertentu
    }

    public function create()
    {
        // Logika untuk menampilkan formulir pembuatan data baru
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data baru dari formulir
    }

    public function edit($id)
    {
        // Logika untuk menampilkan formulir pengeditan data
    }

    public function update(Request $request, $id)
    {
        // Logika untuk menyimpan perubahan pada data yang telah diedit
    }

    public function destroy($id)
    {
        // Logika untuk menghapus data
    }
}
