<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $lastnews= News::latest()->limit(3)->get();

        return view('welcome', compact('lastnews'));
    }
}
