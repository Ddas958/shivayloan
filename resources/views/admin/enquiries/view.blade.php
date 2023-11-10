@section('title','Admin')
@extends('admin.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>
            <a onclick="window.history.back()" class="btn btn-primary float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="form-group py-1 mb-1">
            <label for="">Name: </label>
            {{$enquiry->first_name}} {{$enquiry->last_name}}
        </div>
        <div class="form-group mb-1">
            <label for="">Phone: </label>
            {{$enquiry->phone}}
        </div>
        <div class="form-group mb-1">
            <label for="">Email: </label>
            {{$enquiry->email}}
        </div>
        <div class="form-group mb-1">
            <label for="">State: </label>
            {{$enquiry->state}}
        </div>
        <div class="form-group mb-1">
            <label for="">City: </label>
            {{$enquiry->city}}
        </div>
        <div class="form-group mb-1">
            <label for="">Pincode: </label>
            {{$enquiry->pincode}}
        </div>
        <div class="form-group mb-1">
            <label for="">Occupation: </label>
            {{$enquiry->occupation}}
        </div>
      
    </div>
</div>
@endsection