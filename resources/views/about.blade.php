@section('metatitle',Get_Meta_Tag_Value('About_Settings','Meta_Title'))
@section('metakeyword',Get_Meta_Tag_Value('About_Settings','Meta_Keyword'))
@section('metadescription',Get_Meta_Tag_Value('About_Settings','Meta_Description'))
@extends('layout')
@section('content')
    <!-- Start page header area  -->
    <div class="page-header" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>About</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Start page header area  -->
    <x-about-card />
    <!-- start service section-->
    <section class="experience-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="experience-title">
                        <h2>More than 25 years <span> of experience</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="single-experience">
                        <div class="icon">
                            <i class="pe-7s-portfolio"></i>
                        </div>
                        <div class="content">
                            <h2>2350</h2>
                            <p>Project Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-experience">
                        <div class="icon">
                            <i class="pe-7s-coffee"></i>
                        </div>
                        <div class="content">
                            <h2>50000</h2>
                            <p>Cup Of Coffee</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-experience">
                        <div class="icon">
                            <i class="pe-7s-cup"></i>
                        </div>
                        <div class="content">
                            <h2>120</h2>
                            <p>Award Won</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-experience">
                        <div class="icon">
                            <i class="pe-7s-alarm"></i>
                        </div>
                        <div class="content">
                            <h2>150</h2>
                            <p>Support Team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end service section-->
    <!-- start our partner section -->
    <x-banking-partner />
    <!-- end of our partner section -->
    <!-- end of about section -->
     <!-- start faq question -->
     <x-faq-home />
    <!-- end of faq question -->
@endsection