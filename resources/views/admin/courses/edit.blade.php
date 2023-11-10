@section('title','Course')
@extends('admin.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>
            <a onclick="window.history.back()" class="btn btn-primary float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">
        <h6>Edit Course</h6>
        <form action="{{ route('admin.updateCourse',$course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group py-4 mb-3">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{$course->title}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Short Description</label>
                <input type="text" name="short_description" class="form-control" value="{{$course->short_description}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Long Description</label>
                <textarea name="long_description" id="course-desc" class="form-control">{{$course->long_description}}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">Course Image</label>
                <input type="file" name="course_image" class="form-control">
                <img src="{{ asset('uploads/courses/'.$course->course_image) }}"  alt="Image" width="50%">
                        
            </div>
            <div class="form-group py-2">
                <label for="MetaTitle">Meta Title</label>
                <input type="text" id="MetaTitle" name="Meta_Title" class="@error('MetaTitle') is-invalid @enderror form-control" placeholder="Meta Title" value="{{$course->seo_title}}">
            </div>
            <div class="form-group py-2">
                <label for="MetaKeyword">Meta Keyword</label>
                <input type="text" id="MetaKeyword" name="Meta_Keyword" class="@error('MetaKeyword') is-invalid @enderror form-control" placeholder="Meta Keyword" value="{{$course->seo_keywords}}">
            </div>
            <div class="form-group py-2">
                <label for="MetaDescription">Meta Description</label>
                <input type="text" id="MetaDescription" name="Meta_Description" class="@error('MetaDescription') is-invalid @enderror form-control" placeholder="Meta Description"value="{{$course->seo_description}}" >
            </div>
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Save Course</button>
            </div>
        </form>
    </div>
</div>
@endsection