@extends('layout')

@section('nav')
  <a href="{{route('dashboard.index')}}" class="btn btn-primary">Dashboard</a>
@endsection

@section('title') Algebra Movies @endsection

@section('content')

      @if(Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
      </div>
      @endif
      @if(Session::has('error'))
      <div class="alert alert-danger" role="alert">
        {{Session::get('error')}}
      </div>
      @endif

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

      @if(count($movies) !== 0)
        <h2 class="latest-title"> {{ $group }} </h2>
        <div class="latest">
          @foreach ($movies as $movie)
            <div class="latest-element">
              <a href=" {{route('movie.index', $movie->id )}} ">
                <img src="images/{{ $movie->image }}" width="140" height="180">
                <h3> {{ $movie->title }} ({{ $movie->year }}) </h3>
                <h5>{{ $movie->runtime }} min</h5>
              </a>
            </div>
          @endforeach
        </div>
        <div class="center">
          @if ($group == 'All movies')
            {{ $movies->links() }}
          @endif
        </div>

      @else
        <h1 class="latest-title">No movies with letter {{ $group }} </h1>
      @endif


@endsection
