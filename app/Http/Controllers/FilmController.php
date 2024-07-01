<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Film;
use App\Models\Genres;

class FilmController extends Controller
{
    /**
     * Display all films
     */
    public function films(): View
    {
        // eager loading
        $films = Film::with('genre')->paginate(20);
        // lazy loading
        //$films = Film::all();
        return view('films',
                ['films'=>$films]);
    }

    /**
     * Display a film data
     */
    public function film(Request $request): View
    {
        $film = Film::findOrFail($request->id);

        return view('film',
                ['film'=>$film]);
    }

        /**
     * Display a Genre's films list
     */
    public function genre(Request $request): View
    {
        $genre = Genres::findOrFail($request->id);
        $films_genre = $genre->films()->paginate(15);

        return view('genre',
                ['genre'=>$genre, 'films_genre'=>$films_genre]);
    }
}
