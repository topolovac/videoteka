<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Movie;
use Session;

class HomeController extends Controller
{
    public function __invoke(){

      $movies = Movie::all()->sortByDesc('created_at');
      return view('home',['movies' => $movies, 'group' => 'Latest']);
    }

    public function MoviesWithLetter($letter){

      $alphabet = array(
        'A','B','C','D',
        'E','F','G','H',
        'I','J','K','L',
        'M','N','O','P',
        'Q','R','S','T',
        'U','V','W','X',
        'Y','Z');

      if(in_array(strtoupper($letter), $alphabet)){
        $movies = Movie::where('title','LIKE',"$letter%")->get();
        return view('home',['movies' => $movies, 'group' => $letter]);
      } else {
        Session::flash('error',"Don't try to hack my app :) ");
        return redirect()->back();
      }
    }
}
