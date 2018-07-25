<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\models\Genre;
use App\models\Movie;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $genres = Genre::all();
      $movies = Movie::all();

      return view('dashboard', ['genres' => $genres, 'movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function fileUpload($request) {
      $this->validate($request, [
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);

        return $name;
      }
      return false;
    }

    public function store(Request $request)
    {
      $fileUploaded = $this->fileUpload($request);
      if($fileUploaded){
        $data = array(
          'title' => trim($request->get('name')),
          'genre_id' => trim($request->get('genre')),
          'year' => trim($request->get('year')),
          'runtime' => trim($request->get('runtime')),
          'image' => $fileUploaded
        );

        $movie = new Movie();
        try {
    			$movie_id = $movie->saveMovie($data);
          return redirect()->back();
    		} catch (Exception $e) {
          return redirect()->back();
    		}
      } else {
        return redirect()->back();
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($movie_id)
    {
      return "Radi!";
    }
}
