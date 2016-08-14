<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;

class NewsController extends Controller
{
    public function index()
    {
        $news_posts = App\NewsPost::with('photo')->latest()->get();

        return view('news')->with(compact('news_posts'));
    }
}
