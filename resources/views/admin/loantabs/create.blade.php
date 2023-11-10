@section('title','Loan Details')
@extends('admin.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>
            <a onclick="window.history.back()" class="btn btn-primary float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">
        <h6>Loan Details</h6>
        <form action="{{ route('admin.addLoanTab') }}" method="POST" enctype="multipart/form-data">
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
                <label for="">Tab Name</label>
                <select class="form-control" name="tab_name">
                    <option value="" readonly>Select Tab</option>
                    <option value="Features">Features</option>
                    <option value="Eligibility">Eligibility</option>
                    <option value="Documents">Documents</option>
                    <option value="EMI Calculator">EMI Calculator</option>
                    <option value="Fees and Charges">Fees and Charges</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Details</label>
                <textarea name="tab_value" id="tab-desc" class="form-control"></textarea>
            </div>
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Save Tab</button>
            </div>


        </form>

    </div>
</div>
@endsection