@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($posted->count() > 0)
                        @foreach ($posted as $pasta)

                                <div class="well">
                                <h3><a href="/edit/{{$pasta->id}}">{{$pasta->title}}</a></h3>
                                        {!!$pasta->body!!}
                                    <small>Created on: {{$pasta->created_at}}</small> 
                                </div>
                                <hr>
                            
                        @endforeach

                    @else 
                            <p>No posts created</p> 
                    @endif
                </div>
                <div class="text-center">
                    {!! $posted->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
