<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // membuat index
    public function index()
    {
        $name = 'Daffa Hanif Rabbanee';
        $pelajaran = [
            "Algoritma",
            "Database",
            "Web",
            "Mobile",
            "Jaringan",
            "Data Mining",
            "Hybrid Mobile"
        ];
        return view('hello', compact('name', 'pelajaran'));
    }
}
