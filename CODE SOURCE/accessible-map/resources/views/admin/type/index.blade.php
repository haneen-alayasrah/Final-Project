@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
           <h4>View Type 
               <a href="{{url('admin/add-type')}}" class="btn btn-primary btn-sm float-end">Add Type</a>
           </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
               <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table   id="myDataTable"class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type Name</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($type as $item)
                   
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->status == '1' ? 'Hidden' :'Show'}}</td>
                        <td>
                            <a href="{{url('admin/edit-type/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-type/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>
@endsection