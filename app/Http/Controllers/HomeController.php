<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'SPK WP | Dashboard';

        return view('dashboard.index', compact('title'));
    }
}
