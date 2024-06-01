@extends('layouts.master')
@section('title')
    Halaman Tambah Cast
@endsection

@section('content')
<form method="POST" action="/cast">
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
    <div class="form-group">
      <label >Cast Name</label>
      <input type="text"  class="form-control" name="name">
    </div>
    <div class="form-group">
      <label>Cast Umur</label>
      <input type="number" name="umur" min="7" max="80" class="form-control">
    </div>
    <div class="form-group">
        <label>Cast Bio</label>
        <textarea name="bio" id="form-control" cols="30" rows="10"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection