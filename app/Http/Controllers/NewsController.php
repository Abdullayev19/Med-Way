<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    public function all()
    {
        $all = News::all();
        return view('archive', compact('all'));
    }

    public function archive($id)
    {
        $item = News::find($id);
        return view('viewNews', compact('item'));
    }

    public function index()
    {
        $newss= News::latest()->limit(9)->get();
        return view('news', compact('newss'));
    }

    public function viewnews($id)
    {
        $item = News::find($id);
        return view('viewNews', compact('item'));
    }
}
