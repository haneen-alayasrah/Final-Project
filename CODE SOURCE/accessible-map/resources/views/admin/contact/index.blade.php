@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Contacts</h4>
        </div>
        <div class="card-body">
            @if (session('message'))
               <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Message</th>
                        <th>Sent By</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $item)
                   
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->message}}</td>
                        <td>{{$item->sent_by = Auth::user()->name;}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>
@endsection