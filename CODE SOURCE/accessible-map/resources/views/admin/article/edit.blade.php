@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Edit Article</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
               @foreach ($errors->all() as $error)
                   <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            <form action="{{url('admin/update-article/'.$article->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="">Title</label>
                <input type="text" name="title" value="{{$article->title}}" class="form-control">
            </div>
            <div class="col-md-4 mb-3">
                <label for=""> Type</label>
                <select name="type" class="form-control"> 
                    <option value="thoughts">Thoughts</option>  
                    <option value="news">News</option>  
                    <option value="experiences">Experiences</option>  
            </select>
            </div>
            <strong>  <script src="https://cdn.tiny.cloud/1/c3rl2s1a2j904ahudtii6rcz4xf4ut7fxi7tc3m24h83ajd1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script></strong>
              <script>
                tinymce.init({
                  selector: 'textarea',
                  plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                  toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
                  toolbar_mode: 'floating',
                  tinycomments_mode: 'embedded',
                  tinycomments_author: 'Author name',
                });
              </script>
        
                    <div class="col-md-12 mb-3">
                        <label for=""> Article</label>
                        <textarea name="article" class="form-control">
                            {{$article->article}}
                        </textarea>
                    </div>

            <div class="col-md-12 mb-3">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
        </div>
            <h6>SEO Tags</h6>
            <div class="row">
            <div class="col-md-4 mb-3">
                <label for="">Meta Title</label>
                <input type="text" name="meta_title" value="{{$article->meta_title}}" class="form-control">
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Mate Description</label>
                <textarea rows="3" name="meta_description"  class="form-control">{{$article->meta_description}}</textarea>
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Mate Keywords</label>
                <textarea rows="3" name="meta_keyword"  class="form-control">{{$article->meta_keyword}}</textarea>
            </div>
        </div>
            <h6>Status Mode</h6>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" {{$article->status == '1' ? 'checked':''}}/>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Update Article</button>
                </div>
            </div>

            </form>

        </div>
    </div>
</div>
@endsection