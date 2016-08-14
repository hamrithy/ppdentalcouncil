<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CstAdmin;

class CstadminController extends Controller
{
    function index()
    {
        $cst_admin=CstAdmin::all();
        return view('cst_admin/index')->with('cst_admin',$cst_admin);
    }
}
