<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Film;

class PostController extends Controller
{
    // show all the resources
    public function index()
    {
        $films = Film::all();
        // ddd($films);
        return view('films.index', compact('films'));
    }
    // show the single resource
    public function show($film)
    {
        // code
    }
    // show the form to create the resource
    public function create()
    {
        // code
    }
    // save records in the database
    public function store()
    {
        // code
    }
    // Show a form to modify the resource
    public function edit($film)
    {
        // code
    }
    // update the resource in the database
    public function update($film)
    {
        // code
    }
    // remove the resource in the database
    public function destroy($film)
    {
        // code
    }
}
