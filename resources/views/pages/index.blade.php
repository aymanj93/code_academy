@extends('layouts.app-login')

@section('content')
    <div class="col-12">
        <h1 class="text-center">Welcome to Code Academy</h1>
    </div>
    <div class="col-md-4 col-lg-4 well" style="margin-top: 50px;">
        <h3>Browse Tutorials</h3>
        <hr>
        @if(count($category) > 0)
            @foreach($category as $category)
                <p><a href="/category/{{$category->id}}">{{$category->name}}</a></p>
            @endforeach
        @else
            <p>You're lecturer has not uploaded any tutorials yet</p>
        @endif
    </div>
@endsection
