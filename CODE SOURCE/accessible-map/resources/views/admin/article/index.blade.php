@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
           <h4>View Articles 
               <a href="{{url('admin/add-article')}}" class="btn btn-primary btn-sm float-end">Add Article</a>
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
                        <th>Title</th>
                        <th>Article</th>
                        <th>Image</th>
                        <th>Type</th>
                        <th>Add By</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($article as $item)
                   
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{ Str::Limit($item->article , 5)}}</td>
                        <td>
                            <img src="{{asset('uploads/article/'.$item->image)}}" width="50px" height="50px" alt="Place Image">
                        </td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->created_by}}</td>
                        <td>{{$item->status == '1' ? 'Hidden' :'Show'}}</td>
                        <td>
                            <a href="{{url('admin/edit-article/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-article/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>
@endsection