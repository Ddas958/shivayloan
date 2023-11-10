@section('metatitle',Get_Meta_Tag_Value('Homepage_Settings','Meta_Title'))
@section('metakeyword',Get_Meta_Tag_Value('Homepage_Settings','Meta_Keyword'))
@section('metadescription',Get_Meta_Tag_Value('Homepage_Settings','Meta_Description'))
@extends('layout')
@section('content')
    <!-- start slider section -->
    <x-slider-card />
    <!-- end slider section -->
    <!-- start header bottom section -->
    <x-feature-card />
    <!-- end of header bottom section -->
    <!-- start featured section --> 
    <x-loan-feature-card />
    <!-- end of featured section -->
    <!-- start emi calculator -->
    <x-emi-calculator-card />
    <!-- emi calculato end here -->
    <!-- start of about section -->
    <x-about-card />
    <!-- end about section -->
    <x-loan-process-card />
    <!-- end of loan process section -->

    <!-- start testimonial section -->
    <x-testimonial-card />

     <!-- Start of faq question -->
    <x-faq-home />
    <!-- end of faq question -->

    <!-- start brand section -->
    <x-banking-partner />
    <!-- end of brand section -->
@endsection