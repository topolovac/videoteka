@extends('layout')

@section('nav')
  <a href="{{route('home')}}" class="btn btn-primary">Back</a>
@endsection

@section('content')
  <h1>Dashboard</h1>
  <form>
    <div class="form-group">
      <label for="name">Movie name</label>
      <input type="text" id="name" placeholder="Name" class="form-control">
    </div>
    <div class="form-group">
      <label for="name">Movie genre</label>
      <input type="text" name="name" placeholder="Genre" class="form-control">
    </div>
    <div class="form-group">
      <label for="name">Year</label>
      <input type="text" name="year" placeholder="Year" class="form-control">
    </div>
    <div class="form-group">
      <label for="name">Runtime</label>
      <input type="text" name="name" placeholder="Runtime" class="form-control">
    </div>
    <div class="form-group">
      <label for="name">Image</label>
      <input type="text" name="name" placeholder="png or jpg/jpeg" class="form-control">
    </div>
    <div class="form-group">
      <input type="button" value="Add movie" class="btn btn-primary">
    </div>
  </form>
@endsection
