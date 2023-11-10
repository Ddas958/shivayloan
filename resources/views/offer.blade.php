@section('metatitle',Get_Meta_Tag_Value('Offer_Settings','Meta_Title'))
@section('metakeyword',Get_Meta_Tag_Value('Offer_Settings','Meta_Keyword'))
@section('metadescription',Get_Meta_Tag_Value('Offer_Settings','Meta_Description'))
@extends('layout')
@section('content')

    <!-- start heading section -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>OFFERS</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">OFFERS</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- start heading section -->
    <!-- start offer section -->
    <section class="offer-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 align="center">CURRENT OFFERS</h2>
                        <h5 align="center">Compare Loan Interest Rates From Top Banks</h5>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="tab">
                    <div class="align-items-center" align="center">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @php $i = 1; @endphp
                            @foreach($loans as $loan)
                            <li class="nav-item">
                                <a class="nav-link @if($i == 1) active @endif" id="{{$loan->slug}}-tab" data-toggle="tab" href="#{{$loan->slug}}" role="tab" aria-controls="{{$loan->slug}}" aria-selected="@if($i == 1)true @else false @endif" 
                                aria-expanded="@if($i == 1) true @else false @endif">
                                   {{$loan->name}}
                                </a>
                            </li>
                            @php $i++ @endphp
                            @endforeach
                          
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @php $j =1; @endphp
                            @foreach($loans as $loan)            
                                <div class="tab-pane fade @if($j == 1)show active @endif" id="{{$loan->slug}}" role="tabpanel" aria-labelledby="{{$loan->slug}}-tab">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Bank Name</th>
                                                        <th scope="col">Bank Deal (% Of Roi)</th>
                                                        <th scope="col">EMI</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($offers as $offer)
                                                    @if($loan->id == $offer->loan_id)
                                                    <tr>
                                                        <td>
                                                            @php 
                                                            $bank= DB::table('banks')->where('id','=',$offer->bank_id)->first(); 
                                                            $bank_img = $bank->image;
                                                            
                                                            echo '<img src="/uploads/banks/'.$bank_img.'" alt="">';
                                                            @endphp
                                                        </td>
                                                        <td>{{$offer->roi}}</td>
                                                        <td>{{$offer->emi}}</td>
                                                        <td>{{$offer->description}}</td>
                                                        <td class="text-center">
                                                            <div class="welcome-button">
                                                            <a href="{{route('apply')}}" class="btn btn-default button-success">Apply</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @php $j++; @endphp    
                            @endforeach
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>   
    <!-- end of offer question -->

    <!-- start brand section -->
    <x-banking-partner />
    <!-- end of brand section -->
@endsection