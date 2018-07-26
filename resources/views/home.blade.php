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
            <a href="{{$key}}">{{$key}}</a>
          @endforeach
        </ul>

        <ul>

        </ul>

      </div>

@endsection
