<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemsController extends Controller
{
    public function index()
    {
        return view('user.pages.terms_condition');
    }
}
