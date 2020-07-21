@extends('layouts.app-login')

@section('content')
    <h1>Tutorials</h1>

    @if((count($category)>0))
        <div class="grid-category">
            @foreach($category as $categories)
                    <div class="well">
                        <h3><a href="/posts/{{$categories->id}}">{{$categories->name}}</a></h3>
                        <h4>{{$categories->description}}</h4>
                        <small>Written on {{$categories->created_at}}</small>
                    </div>
            @endforeach
        </div>
    @else
        <p>No posts available</p>
    @endif
@endsection
@section('css')
    <style>
        .grid-category{
            display: grid;
            grid-template-columns: repeat(4,25%);
            grid-gap: 15px;
        }
    </style>
@endsection