@section('metatitle',$loandetail->name)
@section('metakeyword',Get_Meta_Tag_Value('Homepage_Settings','Meta_Keyword'))
@section('metadescription',Get_Meta_Tag_Value('Homepage_Settings','Meta_Description'))
@extends('layout')
@section('content')
   <!-- start of page header area -->
   <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>{{$loandetail->name}}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$loandetail->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <section>
            <div id="navbar">
               <div class="container">    
                    <div class="scrollmenu"> 
                        <a href="#features">FEATURES</a> 
                        <a href="#eligibility">ELIGIBILITY </a>
                        <a href="#document">DOCUMENTATION</a>
                        <a href="#emi_calculator">EMI CALCUALTOR</a>
                        <a href="#fees">FEES AND CHARGES </a>
                        <a href="#reviews">REVIEWS</a>
                        <a href="#faq">FAQ'S</a> 
                    </div>
               </div>
            </div>        
    </section>
    <!-- endnavbar -->
 
    <span id="features" style="margin-top:20px;"></span>
   
    <!-- emi calculato end here -->
  
    <section class="features section-padding"> 
        <div class="container">           
            <div class="row">
                <div class="col-md-12">
                    <h3>{{$loandetail->name}} Features</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>Features and Benefits of our {{$loandetail->name}}</h4>
                </div>
                <div class="col-md-12">
                    @if(isset($feature->value))
                        {!!$feature->value!!}
                    @endif
                </div>
            </div>
        </div>
    </section>

    <span id="eligibility" style="margin-top:20px;"></span>

    <section class="eligibility section-padding-2">
        <div class="container">
           
            <div class="row align-items-center" style="background-color:aliceblue;border-radius: 10px;padding: 20px;">
                <div class="col-md-9" >
                    <div>
                        <h3>{{$loandetail->name}} Eligibility and Documents</h3>
                        <p>Read on to know the criteria required to apply for our {{$loandetail->name}}.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center""><a href="{{route('apply')}}" class="button btn btn-default btn-sm">Apply</a></div>
            </div>
                @if(isset($eligibility->value))
                    {!!$eligibility->value!!}
                @endif
           
        </div>
    </section>

    <span id="document" style="height:20px;"></span>

    <section class="documents section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <h3>Documentation for {{$loandetail->name}}</h3>
                    <p>Income Proof Documents</p>
                </div>
            </div>
            @if(isset($documents->value))
                {!!$documents->value!!}
            @endif
        </div>
    </section>

    <span id="emi_calculator" style="height:20px;"></span>

    <section class="calculator section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>EMI Calculator for {{$loandetail->name}}</h2>
                    
                    @if(isset($emi->value))
                        {!!$emi->value!!}
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 loan-slider-box">
                    <div class="single-loan-slider">
                        <h4>{{$loandetail->name}} Amount</h4>
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

    <span id="fees" style="height:20px;"></span>

    <section class="fees section-padding-2">
        <div class="container">
           
            <div class="row">
                <div class="col-md-12">
                    <h2>Fees and Charges for {{$loandetail->name}}</h2>
                    <p>The fees and charges of {{$loandetail->name}} usually vary from lender to lender and from case to case. The aforementioned table will give you a fair idea of the fees and charges related to {{$loandetail->name}}:
                    </p>
                </div>
            </div>
            @if(isset($fee->value))
                {!!$fee->value!!}
            @endif
        </div>
    </section>

    <span id="reviews" style="height:20px;"></span>

    <section class="review section-padding-2">
        <div class="container">
                <div class="row">
                  
                    <div class="col-md-12">
                        <h2>{{$loandetail->name}} Reviews</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="container py-5">
                        <div class="row text-center">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="card">
                                    <div class="card-body py-4 mt-2">
                                        <h5 class="font-weight-bold">Dwayne Johnson</h5>
                                        <h6 class="font-weight-bold my-3">Self Employee</h6>
                                        <p class="mb-2">
                                        I can't thank the loan company enough for their prompt and efficient service. From the moment I applied, the team guided me through the process seamlessly. The quick approval time exceeded my expectations, and their commitment to customer satisfaction is truly commendable.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="card">
                                    <div class="card-body py-4 mt-2">
                                        <h5 class="font-weight-bold">Mohammed & Aashi</h5>
                                        <h6 class="font-weight-bold my-3">Sales Consultant</h6>
                                        <p class="mb-2">
                                        Choosing this loan company was a game-changer for me. Their transparency in explaining terms and conditions was refreshing. The interest rates were fair, and there were no hidden fees. It's rare to find a lending partner that prioritizes honesty and integrity. I'll definitely be recommending them to friends and family.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-0">
                                <div class="card">
                                    <div class="card-body py-4 mt-2">
                                        <h5 class="font-weight-bold">Vihaan</h5>
                                        <h6 class="font-weight-bold my-3">Finance Consultant</h6>
                                        <p class="mb-2">
                                        The loan company stood out for its personalized approach. The team took the time to understand my financial needs and offered a range of flexible options tailored to my situation. The communication was excellent, and they made the entire process stress-free. I appreciate your dedication to customer satisfaction and will be a returning client in the future.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <span id="faq" style="height:20px;"></span>
   
    <div class="faq-question-area section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="faq-single-title">@if(count($loan_faqs) > 0)FAQs @endif</h2>
                    <div id="accordion" class="second-accordion">
                    @if(count($loan_faqs) > 0)
                        @php $i = 1; @endphp
                        @foreach($loan_faqs as $faq)
                            <div class="card">
                                <div class="card-header" id="heading{{$i}}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$i}}"
                                            aria-expanded="@if($i == 1)@php echo 'true';@endphp@else@php echo 'false';@endphp@endif" aria-controls="collapse{{$i}}">
                                           {{$faq->question}}
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse{{$i}}" class="collapse @if($i == 1)@php echo 'show';@endphp@endif" aria-labelledby="heading{{$i}}"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                    {!!$faq->answer!!}
                                    </div>
                                </div>
                            </div>
                        @php $i++; @endphp
                        @endforeach
                    @else
                    <x-faq-home />
                    
                    @endif          
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of faq question -->
    @if(isset($loan_cities) && count($loan_cities)>0)
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
@endif
    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function () { myFunction() };

        // Get the navbar
        var navbar = document.getElementById("navbar");
        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;
        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("stick")
                document.getElementById('sticky_header').style.display = "none";
            } else {
                navbar.classList.remove("stick");
                document.getElementById('sticky_header').style.display = "block";
            }

        }
    </script>
   
@endsection