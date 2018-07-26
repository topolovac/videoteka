<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Movie;

class HomeController extends Controller
{
    public function __invoke(){

      $movies = Movie::all()->sortByDesc('created_at');
      return view('home',['movies' => $movies, 'group' => 'Latest']);
    }

    public function MoviesWithLetter($letter){

      $movies = Movie::test();
      dd($movies);
      return view('home',['movies' => $movies, 'group' => $letter]);
    }
}
