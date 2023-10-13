<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function vision()
    {
        return view('vision');
    }
    public function traction()
    {
        return view('traction');
    }
    public function gallery()
    {
        return view('gallery');
    }
}
