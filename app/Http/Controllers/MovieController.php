<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //
    public function index() {
        $title = "I miei film preferiti";
        $movies = Movie::all();


        // $query = Movie::where('title', 'LIKE', 'P%');
        // $movies = $query->get();
        // dump($query->toSql());
        // dump($query->getBindings());

        return view('home', compact('title','movies'));
    }

}
