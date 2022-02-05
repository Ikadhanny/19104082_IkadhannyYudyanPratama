<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        // Untuk view ke beranda
        return view('beranda');
    }
  
  	public function about() {
        return view('about');
    }
}
