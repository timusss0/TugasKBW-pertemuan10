<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halController extends Controller
{
    public function home1()
    {
        return view('home1');
    }

    public function about1()
    {
        return view('about1');
    }

    public function contact1()
    {
        return view('contact1');
    }
}
