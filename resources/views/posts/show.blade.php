@extends('layouts.app')

@section('content')
    <h1>{{$category->name}}</h1>
    <small>Posted on {{$category->created_at}}</small>
    <hr>
    <p>{{$category->ytlink}}</p>
    <iframe width="750" height="400"
            src="<?php echo str_replace("watch?v=", "embed/",$category->ytlink);?>">
    </iframe>
@endsection

