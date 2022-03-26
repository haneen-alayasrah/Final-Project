@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Add Place</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            <form action="{{url('admin/add-place')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for=""> Place Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for=""> City</label>
                <select name="city_id" class="form-control">
                    @foreach ($city as $cityitem)
                        <option value="{{$cityitem->id}}">{{$cityitem->name}}</option>  
                    @endforeach
                </select> 
            </div>
            <div class="mb-3">
                <label for=""> Type Place</label>
                <select name="type_id" class="form-control"> 
                    @foreach ($type as $typeitem)
                        <option value="{{$typeitem->id}}">{{$typeitem->name}}</option>  
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for=""> Description</label>
                <textarea rows="4" name="description" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for=""> Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mb-3">
                <label for=""> Location</label>
                <input type="text" name="location" class="form-control">
            </div>
            <div class="mb-3">
                <label for=""> Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="mb-3">
                <label for=""> Social</label>
                <input type="text" name="social" class="form-control">
            </div>
            <div class="mb-3">
                <label for=""> Features</label>
                <textarea rows="4" name="features" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for=""> Features and Facilities</label>
                <textarea rows="4" name="features_and_facilities" class="form-control"></textarea>
            </div>

            <h6>SEO Tags</h6>
            <div class="mb-3">
                <label for="">Meta Title</label>
                <input type="text" name="meta_title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Mate Description</label>
                <textarea rows="3" name="meta_description" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="">Mate Keywords</label>
                <textarea rows="3" name="meta_keyword" class="form-control"></textarea>
            </div>

            <h6>Status Mode</h6>
            <div class="row">
                
                <div class="col-md-3 mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Save Place</button>
                </div>
            </div>

            </form>

        </div>
    </div>
</div>
@endsection