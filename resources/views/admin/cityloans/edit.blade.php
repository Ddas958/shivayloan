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
        <h6>Edit Banking Partner</h6>
        <form action="{{ route('admin.updateLoan',$loan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mt-3 mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{$loan->name}}">
            </div>            
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Update Loan</button>
            </div>


        </form>

    </div>
</div>
@endsection