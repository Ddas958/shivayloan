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
        <h6>Edit Faq</h6>
        <form action="{{ route('admin.updateLoanFaq',$loanfaq->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-3 mb-3">
            <label class="mt-3" for="">Loan Type</label>
                <select class="form-control" name="loan_id">
                    <option value="" readonly>Select Loan</option>
                    @forelse($loans as $key=>$value)
                    <option value="{{$key}}" @if($loanfaq->loan_id == $key) selected @endif >{{$value}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="form-group mt-3 mb-3">
                <label for="">Question</label>
                <input type="text" name="question" class="form-control" value="{{$loanfaq->question}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Answer</label>
                <textarea name="answer" id="tab-desc" class="form-control">{{$loanfaq->answer}}</textarea>
            </div>          
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Update Faq</button>
            </div>


        </form>

    </div>
</div>
@endsection