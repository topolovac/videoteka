@extends('layout')

@section('nav')
  <a href="{{route('home')}}" class="btn btn-primary">Back</a>
@endsection

@section('content')
  <h1>Dashboard</h1>

  <form action=" {{ route('dashboard.store') }} " method="post" enctype="multipart/form-data">

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Movie name</label>
        <input type="text" name="name" placeholder="Name" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Movie genre</label>
        <select name="genre" class="form-control">
          @foreach ($genres as $key)
            <option value="{{$key['id']}}">
              {{$key['name']}} </h2>
            </option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-3">
        <label>Year</label>
        <select class="form-control" name="year">
          @for ($i=(int)date('Y'); $i >= 1900 ; $i--)
            <option>
              {{ $i }} </h2>
            </option>
          @endfor
        </select>
      </div>
      <div class="form-group col-md-3">
        <label>Runtime</label>
        <input type="number" name="runtime" placeholder="minutes" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Image</label>
        <input type="file" name="image" id="image-input" class="form-control-file">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        {{ csrf_field() }}
        <button type="submit"class="btn btn-primary">Add movie</button>
      </div>
    </div>
  </form>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Genre</th>
        <th scope="col">Runtime</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($movies as $movie)
        <tr>
          <td>{{$movie["id"]}}</td>
          <td> <img src="images/{{$movie["image"]}}" height="100px" width="80px" alt=""> </td>
          <td>{{$movie["title"]}}</td>
          <td>{{$genres[$movie["genre_id"]]["name"]}}</td>
          <td>{{$movie["runtime"]}}</td>
          <td>
            <a href=" {{ route('dashboard.destroy',$movie['id']) }} " class="btn btn-danger btn-xs action_confirm" data-method="delete" data-token="{{ csrf_token() }}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection


@section('script')
  <script>
    $(document).ready(function(){
      $("#image-input").change(function(){
        var type = this.files[0].type;
        var types = ['image/png','image/jpg','image/jpeg'];
        var isImage = false;
        for(var i=types.length; i>0; i--){
          if(type == types[i]){
            isImage = true;
          }
        }
        if(!isImage){
          alert("Upload image - png or jpg/jpeg please.");
          $(this).val('');
        }
      })
    })
  </script>
@endsection
