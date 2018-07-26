@extends('layout')

@section('nav')
  <a href="{{route('dashboard.index')}}" class="btn btn-primary">Dashboard</a>
@endsection

@section('title') Algebra Movies @endsection

@section('content')
      <div class="homepage">
        @php
        $alphabet = array(
          'A','B','C','D',
          'E','F','G','H',
          'I','J','K','L',
          'M','N','O','P',
          'Q','R','S','T',
          'U','V','W','X',
          'Y','Z');
        @endphp
        <ul>
          @foreach ($alphabet as $key)
            <a href=" {{ route('home.letter',$key) }} ">{{$key}}</a>
          @endforeach
        </ul>
      </div>

      <h2 id="latest-title"> {{ $group }} </h2>
      <div class="latest">
        @foreach ($movies as $movie)
          <div class="latest-element">
            <a href="#">
              <img src="images/{{ $movie->image }}" width="140" height="180">
              <h3> {{ $movie->title }} ({{ $movie->year }}) </h3>
              <h5>{{ $movie->runtime }} min</h5>
            </a>
          </div>
        @endforeach
      </div>

@endsection
