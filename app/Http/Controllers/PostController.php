<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Film;

class PostController extends Controller
{
    public function index()
    {
        $films = Film::all();
        ddd($films);
        return view('news', compact('films'));
    }
}
