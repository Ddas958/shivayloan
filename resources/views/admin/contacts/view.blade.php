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
            {{$contact->first_name}} {{$contact->last_name}}
        </div>
        <div class="form-group mb-1">
            <label for="">Phone: </label>
            {{$contact->phone}}
        </div>
        <div class="form-group mb-1">
            <label for="">Email: </label>
            {{$contact->email}}
        </div>
        <div class="form-group mb-1">
            <label for="">State: </label>
            {{$contact->state}}
        </div>
        <div class="form-group mb-1">
            <label for="">City: </label>
            {{$contact->city}}
        </div>
        <div class="form-group mb-1">
            <label for="">Reason To Connect: </label>
            {{$contact->reason}}
        </div>
        <div class="form-group mb-1">
            <label for="">Message: </label>
            {{$contact->message}}
        </div>
    </div>
</div>
@endsection