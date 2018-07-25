@extends('layout')

@section('nav')
  <a href="{{route('home')}}" class="btn btn-primary">Back</a>
@endsection

@section('content')
  <h1>Dashboard</h1>

  <form>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Movie name</label>
        <input type="text" id="name" placeholder="Name" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label for="name">Movie genre</label>
        <select class="form-control">
          @foreach ($genres as $key)
            <option>
              {{$key['name']}} </h2>
            </option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="name">Year</label>
        <select class="form-control">
          @for ($i=(int)date('Y'); $i >= 1900 ; $i--)
            <option>
              {{ $i }} </h2>
            </option>
          @endfor
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="name">Runtime</label>
        <input type="number" name="name" placeholder="minutes" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label for="image">Image</label>
        <input type="file" name="image" id="image-input" class="form-control-file">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
        <input type="button" value="Add movie" class="btn btn-primary">
      </div>
    </div>
  </form>
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
