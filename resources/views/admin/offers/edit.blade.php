@section('title','Update Offer')
@extends('admin.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>
            <a onclick="window.history.back()" class="btn btn-primary float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">
        <h6>Edit Offer</h6>
        <form action="{{ route('admin.updateOffer',$offer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-3 mb-3">
            <label class="mt-3" for="">Loan Type</label>
                <select class="form-control" name="loan_id">
                    <option value="" readonly>Select Loan</option>
                    @forelse($loans as $key=>$value)
                    <option value="{{$key}}" @if($offer->loan_id == $key) selected @endif >{{$value}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="form-group mb-3">
            <label class="mt-3" for="">Banking Partner</label>
                <select class="form-control" name="bank_id">
                    <option value="" readonly>Select Bank</option>
                    @forelse($banks as $key=>$value)
                    <option value="{{$key}}" @if($offer->bank_id == $key) selected @endif>{{$value}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">BANK DEAL (% OF ROI)</label>
                <input type="text" name="roi" class="form-control" value="{{$offer->roi}}">
            </div>
            <div class="form-group mb-3">
                <label for="">EMI</label>
                <input type="text" name="emi" class="form-control"  value="{{$offer->emi}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Description</label>
                <textarea name="description" id="" class="form-control">{{$offer->description}}</textarea>
            </div>
     
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Update Offer</button>
            </div>


        </form>

    </div>
</div>
@endsection