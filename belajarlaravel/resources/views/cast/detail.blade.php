@extends('layouts.master')
@section('title')
    Halaman Detail Cast
@endsection
@section('content')
    <h1>{{$cast->name}}</h1>
    <p>{{$cast->umur}}</p>
    <p>{{$cast->bio}}</p>  
    
    <a href="/cast" class="btn btn-secondary btn-success">Kembali</a>

@endsection