
@extends('layouts.app')

@section('content')
            <h1>User info</h1>

       <p><strong>Id:</strong> {{$dangote->id}}</p>
     <p><strong>Name:</strong> {{$dangote->name}}</p>
    <p><strong>Email:</strong> {{$dangote->email}}</p>


 

@stop