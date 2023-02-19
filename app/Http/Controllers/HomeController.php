<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'SPK WP | Dashboard',
            'author' => 'Dzaky Syahrizal',
        ]);
    }
}
