@extends('layout')

@section('style')
  <style media="screen">
    .movie {
      text-align: center;
      border-bottom: 1px solid silver;
      margin-bottom: 60px;
    }
    .row div {
      text-align: center;
    }

    .info p {
      border-bottom: 1px solid silver;
    }
  </style>
@endsection

@section('content')
  <div class="container movie">
    <h1> {{$movie->title}} ({{$movie->year}})</h1>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6 col-md-6">
        <img src="../images/{{$movie->image}}" width="250" height="300">
      </div>
      <div class="col-6 col-md-6 info">
        <h3>Director</h3>
        <p id="director"></p>
        <h3>Writer</h3>
        <p id="writer"></p>
        <h3>Actors</h3>
        <p id="actors"></p>
        <h3>IMDB rating</h3>
        <p id="rating"></p>
      </div>
    </div>
  </div>
@endsection

@section('script')

  @php
  $movieName = str_replace(" ","-",strtolower($movie->title));
  @endphp

  <script type="text/javascript">

  $(document).ready(function(){
    $.get({
      url:"http://www.omdbapi.com/?t={{$movieName}}&apikey=b9400339",
      error:function(e){
        console.log(e);
      },
      success:function(data){
        setInfo(data);
      }
    })
  })

  function setInfo(data){
    console.log(data);
    $("#actors").html(data.Actors);
    $("#writer").html(data.Writer);
    $("#director").html(data.Director);
    $("#rating").html(data.imdbRating);
  }

  </script>
@endsection
