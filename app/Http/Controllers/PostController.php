<?php

namespace App\Http\Controllers;
use App\Models\posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('dashboard.post.index');
    }
}
