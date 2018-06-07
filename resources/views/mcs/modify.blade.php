
{{-- editing MCS users table --}}

@extends('layouts.app')

@section('content')

@include('inc/messages')

<h1>Edit user</h1>

<hr>

<div class="row">
    <div class="col-md-3">

        <form method="POST" action="/update/{{$post->id}}">

            {{method_field('PATCH')}}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{$post->name}}" placeholder="First Name" class="form-control"><br>
            </div>

            <div class="form-group">
                <label for="emal">Email:</label>
                <input type="text" name="email" id="email" value="{{$post->email}}" class="form-control">
            </div>

            {{csrf_field()}}

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>

    </div>
</div>

@stop