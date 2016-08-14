<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RigisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
}
