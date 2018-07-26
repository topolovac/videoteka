@extends('layout')

@section('content')
  <div class="container">
    <h1> {{$movie->title}} </h1>
    <img src="../images/{{$movie->image}}" width="250" height="300">
  </div>

  <div class="movie-info">
    
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

  }

  </script>
@endsection
