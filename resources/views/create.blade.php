@extends('layouts.app')

@section('content')

@include('inc/messages')

<h1>Create Post</h1>

<div class="row">
    <div class="col-md-">

        <form method="post" action="store">

            <div class="form-group">
                <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title')}}" placeholder="Title" class="form-control">
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea name="body" id="article-ckeditor" cols="30" rows="10" placeholder="Body" class="form-control">{{old('body')}}</textarea>
            </div>

            {{csrf_field()}}

            <div class="form-group">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </form>

    </div>
</div>

@stop