@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Edit Places</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
               @foreach ($errors->all() as $error)
                   <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            <form action="{{url('admin/update-place/'.$place->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="">Type Place Name</label>
                <input type="text" name="name" value="{{$place->name}}" class="form-control">
            </div>
            <div class="col-md-4 mb-3">
                <label for=""> City</label>
                <select name="city_id" class="form-control">
                    @foreach ($city as $cityitem)
                        <option value="{{$cityitem->id}}">{{$cityitem->name}}</option>  
                    @endforeach
                </select> 
            </div>
            <div class="col-md-4 mb-3">
                <label for=""> Type Place</label>
                <select name="type_id" class="form-control"> 
                    @foreach ($type as $typeitem)
                        <option value="{{$typeitem->id}}">{{$typeitem->name}}</option>  
                    @endforeach
                </select>
            </div>

            <div class="col-md-12 mb-3">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Location</label>
                <input type="text" name="location" value="{{$place->location}}" class="form-control">
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Phone</label>
                <input type="text" name="phone" value="{{$place->phone}}" class="form-control">
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Social Link</label>
                <input type="text" name="social" value="{{$place->social}}" class="form-control">
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Discription</label>
                <textarea rows="3" name="description" class="form-control">{{$place->description}}</textarea>
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Features Accessible</label>
                <textarea rows="3" name="features" class="form-control">{{$place->features_accessible}}</textarea>
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Features and Facilities</label>
                <textarea rows="3" name="features_and_facilities" class="form-control">{{$place->features_and_facilities}}</textarea>
            </div>
        </div>
            <h6>SEO Tags</h6>
            <div class="row">
            <div class="col-md-4 mb-3">
                <label for="">Meta Title</label>
                <input type="text" name="meta_title" value="{{$place->meta_title}}" class="form-control">
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Mate Description</label>
                <textarea rows="3" name="meta_description"  class="form-control">{{$place->meta_description}}</textarea>
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Mate Keywords</label>
                <textarea rows="3" name="meta_keyword"  class="form-control">{{$place->meta_keyword}}</textarea>
            </div>
        </div>
            <h6>Status Mode</h6>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" {{$place->status == '1' ? 'checked':''}}/>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Update Place</button>
                </div>
            </div>

            </form>

        </div>
    </div>
</div>
@endsection