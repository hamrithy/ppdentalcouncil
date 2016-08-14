<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VisionaryController extends Controller
{
    public function index()
    {
        return view('visionary');
    }
}
