<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function id($articlesId)
    {
        return 'Halaman Artikel dengan ID{' . $articlesId . '}';
    }
}
