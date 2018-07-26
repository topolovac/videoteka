<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Movie;

class MovieController extends Controller
{
      public function index($id){

        $movie = Movie::find($id);
        return view('movie', ['movie' => $movie]);
      }
}
