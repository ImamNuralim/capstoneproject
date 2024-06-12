<?php


// AnswerController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index()
    {
        $answers = collect([
            (object)[
                'id' => 1,
                'user' => (object)[
                    'username' => 'imamnuralim',
                    'username_slug' => 'imam-alim',
                    'image' => null
                ],
                'created_at' => now(),
                'answer' => 'This is a dummy answer.',
                'question' => (object)[
                    'title' => 'What is Lorem Ipsum?',
                    'title_slug' => 'what-is-lorem-ipsum'
                ]
            ],
            // Tambahkan lebih banyak data dummy sesuai kebutuhan
        ]);

        $from = 'home';
        $credential = 'Undip';
        $total_views = 123;
        $total_upvotes = 45;
        $total_comments = 6;
        $total_shares = 12;
        $followed = false;
        $vote = null;

        return view('home', compact('answers', 'from', 'credential', 'total_views', 'total_upvotes', 'total_comments', 'total_shares', 'followed', 'vote'));
    }
}
