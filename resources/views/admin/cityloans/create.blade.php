@section('title','Add Loan')
@extends('admin.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>
            <a onclick="window.history.back()" class="btn btn-primary float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">
        <h6>Add Loan In City</h6>
        <form action="{{ route('admin.addCityLoan') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mt-3 mb-3">
            <label class="mt-3" for="">Loan Type</label>
                <select class="form-control" name="loan_id">
                    <option value="" readonly>Select Loan</option>
                    @forelse($loans as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="form-group mt-3 mb-3">
            <label class="mt-3" for="">Loan Type</label>
                <select class="form-control" name="city_id">
                    <option value="" readonly>Select City</option>
                    @forelse($cities as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Save Loan</button>
            </div>


        </form>

    </div>
</div>
@endsection