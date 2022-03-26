@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Add Article</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            <form action="{{url('admin/add-article')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for=""> Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Type</label>
                <select name="type" class="form-control"> 
                        <option value="thoughts">Thoughts</option>  
                        <option value="news">News</option>  
                        <option value="experiences">Experiences</option>  
                </select>
            </div>

            <div class="mb-3">
                <label for=""> Article</label>
                <textarea rows="3" name="article" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for=""> Image</label>
                <input type="file" name="image" class="form-control">
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