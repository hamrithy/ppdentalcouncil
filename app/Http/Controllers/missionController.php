<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class missionController extends Controller
{
    public function index()
    {
        return view('mission');
    }
}
