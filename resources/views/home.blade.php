@extends('layout')

@section('navigation')
  <a href="#" class="btn btn-primary">Dashboard</a>
@endsection

@section('content')
      <div class="content homepage">
        <h1 id="main-title">Algebra Movies</h1>

        <div class="container">
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
              <a href="{{$key}}">{{$key}}</a>
            @endforeach
          </ul>

          <ul>

          </ul>
        </div>

      </div>


@endsection
