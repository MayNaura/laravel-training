@extends('layouts.app')

@section('content')

@include('inc/messages')

<h1>Edit post</h1>

<hr>

<div class="row">
    <div class="col-md-">

        <form method="POST" action="/edit/{{$post->id}}">

            {{method_field('PATCH')}}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{$post->title}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea name="body" id="article-ckeditor" cols="30" rows="10" class="form-control">{{$post->body}}</textarea>
            </div>

            {{csrf_field()}}

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>

    </div>
</div>

@stop