@extends('layouts.master')
@section('title')
    Halaman Edit Cast
@endsection

@section('content')
<form method="POST" action="/cast/{{$cast->id}}">
    {{--Validation--}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
 @endif

 {{--form input--}}
    @csrf
    @method("put")
    <div class="form-group">
      <label >Cast Name</label>
      <input type="text" value="{{$cast->name}}" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label>Cast Umur</label>
      <input type="number" value="{{$cast->umur}}"" name="umur" min="7" max="80" class="form-control" >
    </div>
    <div class="form-group">
        <label>Cast Bio</label>
        <textarea name="bio" id="form-control" cols="30" rows="10">{{$cast->bio}}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection