<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return '2241720012 Tyase Nisaan Jamilaa';
    }

    public function id($articlesId)
    {
        return 'Halaman Artikel dengan ID{' . $articlesId . '}';
    }
}
