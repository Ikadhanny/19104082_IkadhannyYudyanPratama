<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galeri;

class beranda extends Controller
{
    //
    public function beranda() {
        return view('welcome');
    }

    public function galeri() {
        $galeri = galeri::all();
        return view('galeri')
            ->with('galeri', $galeri);
    }
}
