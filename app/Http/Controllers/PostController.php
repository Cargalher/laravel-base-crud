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
    
    // show the form to create the resource
    public function create()
    {
        return view('films.create');
    }
    // save records in the database
    public function store(Request $request)
    {
        // ddd($request->all());
        $film = new Film();
        $film->title = $request->title;
        $film->description = $request->description;
        $film->poster = $request->poster;
        $film->save();
        return redirect()->route('films.index');
    }
    // show the single resource
    public function show(Film $film)
    {
        // code
       
        return view('films.show', compact('film'));
    }
    // Show a form to modify the resource
    public function edit(Film $film)
    {
       return view('films.edit', compact('film'));
    }
    // update the resource in the database
    public function update(Request $request, Film $film)
    {
        
        $film->update($request->all());
        return redirect()->route('films.show', $film->id);
    }
    // remove the resource in the database
    public function delete($film)
    {
        // code
    }
}
