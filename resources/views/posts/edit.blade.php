@extends('layouts.admin')

@section('content')
    <h1>Edit Tutorial</h1>
    {!! Form::open(['action' => ['CategoryController@update', $category->id], 'method' => 'POST']) !!}
    <div class="form-group col-md-10 mx-auto">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $category->name, ['class'=>'form-control', 'placeholder' => 'Name'])}}
    </div>
    <div class="form-group col-md-10 mx-auto">
        {{Form::label('ytlink', 'Youtube Link')}}
        {{Form::text('ytlink', $category->ytlink, ['class'=>'form-control', 'placeholder' => 'Add your youtube link video'])}}
        <small class="text-danger">Reminder: Some youtube creator doesn't allow sharing videos in third party site and can only seen in youtube. Only youtube with empty link after the "watch" will work eg. https://www.youtube.com/watch?v=ImtZ5yENzgE</small>

    </div>
    <div class="form-group col-md-10 mx-auto">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', $category->description, ['class'=>'form-control', 'placeholder' => 'eg. How to Create Your Own Server'])}}
    </div>
    <div class="col-md-10 mx-auto">
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection