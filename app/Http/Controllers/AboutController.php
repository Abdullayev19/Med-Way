<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Doctor;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $doctors = Doctor::all();

        return view('about', compact('abouts', 'doctors'));
    }
}
