@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
           <h4>View Places 
               <a href="{{url('admin/add-place')}}" class="btn btn-primary btn-sm float-end">Add Place</a>
           </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
               <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Place Name</th>
                        <th>City</th>
                        <th>Type Place</th>
                        <th>Image</th>
                        <th>Location</th>
                        <th>Phone</th>
                        <th>Social Link</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($place as $item)
                   
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->city->name}}</td>
                        <td>{{$item->type->name}}</td>
                        <td>
                            <img src="{{asset('uploads/place/'.$item->image)}}" width="50px" height="50px" alt="Place Image">
                        </td>
                        <td>{{ Str::Limit($item->location , 5) }}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{ Str::Limit($item->social , 5) }}</td>
                        <td>{{$item->status == '1' ? 'Hidden' :'Show'}}</td>
                        <td>
                            <a href="{{url('admin/edit-place/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-place/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>
@endsection