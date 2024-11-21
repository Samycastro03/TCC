<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullcalenderController extends Controller
{
    public function index()
    {
        return view('calendario');
    }
}
