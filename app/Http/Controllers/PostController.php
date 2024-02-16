<?php

namespace App\Http\Controllers;
use App\Models\posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = posts::all();

        return view('posts.index', compact('posts'));
    }
}
