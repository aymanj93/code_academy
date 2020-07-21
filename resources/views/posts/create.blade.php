@extends('layouts.admin')

@section('content')
    <div class="container">
        @foreach($category as $categories)
        <div class="well col-md-3" style="margin: 10px 5px; height: 200px;">
            <h5>Name: <a href="/category/{{$categories->id}}">{{$categories->name}}</a></h5>
            <p>{{$categories->description}}</p>
            <small class="col-md-12" style="padding: 0;">Created on {{$categories->created_at}}</small>
            <a href="/category/{{$categories->id}}/edit" class="btn btn-info pull-left" style="padding: 5px 10px;font-size: 12px; margin-top: 40px; display: none;">Edit</a>
            {!! Form::open(['action'=>['CategoryController@destroy', $categories->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger pull-right', 'style' => 'padding: 5px 10px;font-size: 12px; margin-top: 40px; display: none;'])}}
            {!! Form::close() !!}
        </div>
        @endforeach

        <!-- Trigger/Open The Modal -->
        <button id="myBtn" class="btn btn-add col-md-3" style="margin: 10px 5px;">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <p>Create New Youtube Video</p>
        </button>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                {!! Form::open(['action' => 'CategoryController@store','method' => 'POST']) !!}
                <div class="form-group col-md-10 mx-auto">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', '', ['class'=>'form-control', 'placeholder' => 'Name'])}}
                </div>
                <div class="form-group col-md-10 mx-auto">
                    {{Form::label('ytlink', 'Youtube Link')}}
                    {{Form::text('ytlink', '', ['class'=>'form-control', 'placeholder' => 'Add your youtube link video'])}}
                    <small class="text-danger">Reminder: Some youtube creator doesn't allow sharing videos in third party site and can only seen in youtube. Only youtube with empty link after the "watch" will work eg. https://www.youtube.com/watch?v=ImtZ5yENzgE</small>

                </div>
                <div class="form-group col-md-10 mx-auto">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', '', ['class'=>'form-control article-ckeditor', 'placeholder' => 'eg. How to Create Your Own Server'])}}
                </div>
                <div class="col-md-10 mx-auto">
                    <button id="close-modal" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    var close = document.getElementById("close-modal");

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    close.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $(function(){
       $('.well').hover(function(){
          $(this).find('.btn-info').show();
          $(this).find('.btn-danger').show();
       },
       function () {
            $('.btn-info').hide();
            $('.btn-danger').hide();
       });
    });


</script>
@endsection