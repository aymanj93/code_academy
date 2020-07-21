@extends('layouts.app')

@section('content')
    <div class="col-12">
        <h1>{{$title}}</h1>
        @if(count($services_list) > 0)
            <ul class="list-group">
                @foreach($services_list as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection