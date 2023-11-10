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
        <h6>Edit {{$loantab->key}} Tab</h6>
        <form action="{{ route('admin.updateLoanTab',$loantab->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-3 mb-3">
            <label class="mt-3" for="">Loan Type</label>
                <select class="form-control" name="loan_id">
                    <option value="" readonly>Select Loan</option>
                    @forelse($loans as $key=>$value)
                    <option value="{{$key}}" @if($loantab->loan_id == $key) selected @endif >{{$value}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="form-group mt-3 mb-3">
                <label for="">Tab Name</label>
                <input type="text" name="tab_name" class="form-control" value="{{$loantab->key}}" readonly>
            </div>
            <div class="form-group mb-3">
                <label for="">Details</label>
                <textarea name="tab_value" id="tab-desc" class="form-control">{{$loantab->value}}</textarea>
            </div>          
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Update Tab</button>
            </div>


        </form>

    </div>
</div>
@endsection