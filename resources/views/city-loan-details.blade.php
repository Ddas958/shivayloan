@section('metatitle',Get_Meta_Tag_Value('Homepage_Settings','Meta_Title'))
@section('metakeyword',Get_Meta_Tag_Value('Homepage_Settings','Meta_Keyword'))
@section('metadescription',Get_Meta_Tag_Value('Homepage_Settings','Meta_Description'))
@extends('layout')
@section('content')
   <!-- start of page header area -->
   <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>@php echo ucwords(str_replace("-"," ",$cityloandetail->slug));  @endphp </h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">{{$loandetail->name}}</li>
                            <li class="breadcrumb-item active" aria-current="page">
                            @php 
                                echo ucwords(str_replace("-"," ",$cityloandetail->slug)); 
                            @endphp  
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page header -->
    <section class="features section-padding-2"> 
        <div class="container">           
            <div class="row">
                <div class="col-md-12">
                    <h3>@php echo ucwords(str_replace("-"," ",$cityloandetail->slug)); @endphp</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>Features and Benefits of our @php echo ucwords(str_replace("-"," ",$cityloandetail->slug)); @endphp
                    </h4>
                </div>
                <div class="col-md-12">
                    @if(isset($feature->value))
                        {!!$feature->value!!}
                    @endif
                </div>
            </div>
        </div>
    </section>

    <span id="eligibility"></span>

    <section class="eligibility section-padding-2">
        <div class="container">
           
            <div class="row align-items-center" style="background-color:aliceblue;border-radius: 10px;padding: 10px;">
                <div class="col-md-9" >
                    <div style="padding: 20px;">
                        <h3>@php echo ucwords(str_replace("-"," ",$cityloandetail->slug)); @endphp Eligibility and Documents</h3>
                        <p>Read on to know the criteria required to apply for our @php echo ucwords(str_replace("-"," ",$cityloandetail->slug)); @endphp.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center""><a href="{{route('apply')}}" class="button btn btn-default btn-sm">Apply</a></div>
            </div>
                @if(isset($eligibility->value))
                    {!!$eligibility->value!!}
                @endif
           
        </div>
    </section>

    <span id="document"></span>

    <section class="documents section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <h3>Documentation for @php echo ucwords(str_replace("-"," ",$cityloandetail->slug)); @endphp</h3>
                    <p>Income Proof Documents</p>
                </div>
            </div>
            @if(isset($documents->value))
                {!!$documents->value!!}
            @endif
        </div>
    </section>

    <span id="emi_calculator"></span>

    <section class="calculator section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>EMI Calculator for @php echo ucwords(str_replace("-"," ",$cityloandetail->slug)); @endphp</h2>
                    
                    @if(isset($emi->value))
                        {!!$emi->value!!}
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 loan-slider-box">
                    <div class="single-loan-slider">
                        <h4>@php echo ucwords(str_replace("-"," ",$cityloandetail->slug)); @endphp Amount</h4>
                        <div id="pricipal-slide"></div>
                        <div>
                            <span>₹</span>
                            <h6 id="pricipal"></h6>
                        </div>
                    </div>
                    <div class="single-loan-slider">
                        <h4>Loan Months</h4>
                        <div id="totalyear-slide"></div>
                        <div>
                            <h6 id="totalyear"></h6>
                            <span>Months</span>
                        </div>
                    </div>
                    <div class="single-loan-slider">
                        <h4>Interest Rate</h4>
                        <div id="intrest-slide"></div>
                        <div>
                            <h6 id="intrest"></h6>
                            <span>%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center loan-emi">
                    <div class="total-calculation">
                        <div class="single-total">
                            <h5>Monthly Payments</h5>
                            <h2 class="emi-price" id="emi">0</h2>
                        </div>
                        <div class="single-total">
                            <h5>Total Principal to be Pay</h5>
                            <h2 id="tbl_emi">0</h2>
                        </div>
                        <div class="single-total">
                            <h5>Total Interest to be Pay</h5>
                            <h2 id="tbl_la">0</h2>
                        </div>
                        <a href="{{route('apply')}}" class="btn applybtn btn-default btn-sm">APPLY NOW</a>
                    </div>
                </div>
                
            </div> 
        </div>
    </section>

    <span id="fees"></span>

    <section class="fees section-padding-2">
        <div class="container">
           
            <div class="row">
                <div class="col-md-12">
                    <h2>Fees and Charges for @php echo ucwords(str_replace("-"," ",$cityloandetail->slug)); @endphp</h2>
                    <p>The fees and charges of @php echo ucwords(str_replace("-"," ",$cityloandetail->slug)); @endphp usually vary from lender to lender and from case to case. The aforementioned table will give you a fair idea of the fees and charges related to @php echo ucwords(str_replace("-"," ",$cityloandetail->slug)); @endphp:
                    </p>
                </div>
            </div>
            @if(isset($fee->value))
                {!!$fee->value!!}
            @endif
        </div>
    </section>

    <!-- end of faq question -->
    <section class="section-city section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="text-align: center;">We Are Available In Cities</h3>
                </div>
            </div>
            <div class="row cities">
                @foreach($loan_cities as $city)
                
                    <div class="col-lg-3 col-md-4 col-sm-6 city-div">
                        <a class="text-decoration-none city-item" href="/{{$loandetail->slug}}/{{$city->slug}}">
                            @php 
                            $cityname = DB::table('cities')->where('id','=',$city->city_id)->first(); 
                            echo $cityname->name;
                            @endphp
                        </a>
                    </div>
                @endforeach
             </div>
        </div>
    </section>
   
@endsection