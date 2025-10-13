<?php

namespace App\Http\Controllers;

use App\Models\ENews;
use Illuminate\Http\Request;

class ENewsController extends Controller
{
    public function index()
    {
        // Sabhi events fetch karo
        $news = ENews::paginate(12);

        // Blade view me pass karo
        return view('kks-all-Enews', compact('news'));
    }
    public function singleNews(ENews $news)
    {
        return view('kks-single-news', compact('news'));
    }
}
