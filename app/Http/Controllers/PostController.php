<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Film;

class PostController extends Controller
{
    ////**********************************************************INDEX************ show all the resources
    public function index()
    {
        $films = Film::all();
        // ddd($films);
        return view('films.index', compact('films'));
    }
    
    //**********************************************************CREATE************/ show the form to create the resource
    public function create()
    {
        return view('films.create');
    }
    ////**********************************************************STORE************ save records in the database
    public function store(Request $request)
    {
        // dd($request->all());
        $validated =  $request->validate([
            'title'=> 'required | min:2 | max:100',
            'poster'=>'required',
            'description'=>'required'
           
        ]);
        // ddd($validated);
        Film::create($validated);
        return redirect()->route('films');
        

        
    }
    ////**********************************************************SHOW************ show the single resource
    public function show(Film $film)
    {
        // code
       
        return view('films.show', compact('film'));
    }
    // //**********************************************************EDIT************Show a form to modify the resource
    public function edit(Film $film)
    {
       return view('films.edit', compact('film'));
    }
    // //**********************************************************UPDATE************update the resource in the database
    public function update(Request $request, Film $film)
    {
       $validated =  $request->validate([
            'title'=> 'required | min:5 | max:100',
            'poster'=>'required',
            'description'=>'required'
           
        ]);
        
       $film->update($validated);
        return redirect()->route('films.index');
        
    }
    ////**********************************************************DESTROY************ remove the resource in the database
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index');
    }
}
