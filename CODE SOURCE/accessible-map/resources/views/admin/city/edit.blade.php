@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Edit City </h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
               @foreach ($errors->all() as $error)
                   <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            <form action="{{url('admin/update-city/'.$city->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="">city Name</label>
                <input city="text" name="name" value="{{$city->name}}" class="form-control">
            </div>

            <h6>SEO Tags</h6>
            <div class="mb-3">
                <label for="">Meta Title</label>
                <input city="text" name="meta_title" value="{{$city->meta_title}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Mate Description</label>
                <textarea rows="3" name="meta_description"  class="form-control">{{$city->meta_description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="">Mate Keywords</label>
                <textarea rows="3" name="meta_keyword"  class="form-control">{{$city->meta_keyword}}</textarea>
            </div>

            <h6>Status Mode</h6>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label>Navbar Status</label>
                    <input type="checkbox" name="navbar_status" {{$city->navbar_status == '1'? 'checked':''}}/>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" {{$city->navbar_status == '1' ? 'checked':''}}/>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Update City </button>
                </div>
            </div>

            </form>

        </div>
    </div>
</div>
@endsection