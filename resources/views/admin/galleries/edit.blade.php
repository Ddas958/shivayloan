@section('title','Update Photo')
@extends('admin.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>
            <a onclick="window.history.back()" class="btn btn-primary float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">
        <h6>Edit Photo</h6>
        <form action="{{ route('admin.updatePhoto',$gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group py-4 mb-3">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{$gallery->title}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Long Description</label>
                <textarea name="long_desc" id="galleries-desc" class="form-control">{{$gallery->long_description}}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">Gallery Image</label>
                <input type="file" name="gallery_image" class="form-control">
                <img src="{{ asset('uploads/galleries/'.$gallery->gallery_image) }}"  alt="Image">
                        
            </div>
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Update Photo</button>
            </div>


        </form>

    </div>
</div>
@endsection