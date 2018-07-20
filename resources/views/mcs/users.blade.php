@extends('layouts.app')

@section('content')


        <div class="content table-responsive table-full-width">
            <table id="example" class="table table-hover table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="width: 0.5%;">ID</th>
                            <th style="width: 8%;">NAME</th>
                            <th style="width: 10%;">EMAIL</th>
                          @auth  {{-- prevent guest from seeing these buttons  --}}
                            <th style="width: 3.4%;">BUTTON</th>
                          @endauth
                        </tr>
                    </thead>
                    <tbody>
                            @if ($users_dangote->count() > 0)  {{-- if users exist --}}
                                @foreach ($users_dangote as $peeps)
                                <tr>
                                    <td>{{$peeps->id}}</td>
                                    <td>{{$peeps->name}}</td>
                                    <td>{{$peeps->email}}</td>

                                    @auth  {{-- prevent guest from seeing these buttons  --}}
                                        <td><a href='/mcs/view/{{$peeps->id}}' class="btn btn-default">view</a>
                                            <a href='modify/{{$peeps->id}}' class="btn btn-primary">Edit</a>
                                            <form method="POST" action="/remove/{{$peeps->id}}" style="float:right">

                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}

                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    @endauth

                                </tr>
                                @endforeach
                            @else
                                <strong><p>Unfortunately, there are no users.</p></strong>
                            @endif
                    </tbody>
            </table>                

         </div>
@stop

@section('scripts')
        <script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <script>
                $(document).ready(function() {
                    $('#example').DataTable({
                        "stateSave": true
                    });
                } );
        </script>
    
@stop


{{-- <td>{{link_to('/cards/view/'.$peeps->id, 'view')}}</td> --}}