<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
  
    public function myMovies() {
        $myMovies = Movie::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('movies.my-movies',['myMovies'=>$myMovies]);
    }

    public function create() {
        return view('movies.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'string|required',
            'genre' => 'string|required',
        ]);

        $movie = Movie::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'genre' => $request->genre,
        ]);

        return redirect('/movies/' . $movie->id)->with('Info','New movie created');
    }

    public function show(Movie $movie) {
        return view('movies.view', ['movie'=>$movie]);
    }

    public function edit(Movie $movie) {
        return view('movies.edit', ['movie'=>$movie]);
    }

    public function update(Movie $movie, Request $request) {
        $request->validate([
            'title' => 'string|required',
            'genre' => 'string|required',
        ]);

        $movie->update($request->all());

        return redirect('/movies/' . $movie->id);
    }

  public function recentMovies(){
    return view('movies.recent-movies');
  }
}