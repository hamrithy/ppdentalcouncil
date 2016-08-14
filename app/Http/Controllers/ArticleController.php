<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Articles;

class ArticleController extends Controller
{
    function index()
    {

        return view('admin/index');
    }
}
