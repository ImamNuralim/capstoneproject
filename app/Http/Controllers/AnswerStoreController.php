<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerStoreController extends Controller
{
    public function index()
    {
        return view('user.answerstore');
    }
}
