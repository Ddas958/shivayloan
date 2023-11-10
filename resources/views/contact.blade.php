@section('metatitle',Get_Meta_Tag_Value('Contact_Settings','Meta_Title'))
@section('metakeyword',Get_Meta_Tag_Value('Contact_Settings','Meta_Keyword'))
@section('metadescription',Get_Meta_Tag_Value('Contact_Settings','Meta_Description'))
@extends('layout')
@section('content')
    <!-- end of header area -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page header -->

    <!-- start of contact form -->
    <section class="section-padding contact-us-padding">
        <div class="container">
            <div class="row">
                <div class="offset-2 col-md-8  text-center contact-form">
                    @include('components.message')
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="get-in-touch">
                        <div class="section-title">
                            <h2>Get in Touch</h2>
                        </div>
                        <p>The passages of Lorem Ipsum available but the majority have suffered alteration embarrased</p>
                    </div>
                    <form action="{{route('addContact')}}" method="POST">
                        @csrf
                        <div class="row list-input">
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="state" placeholder="State" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                <input type="text" name="city" placeholder="City" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="reason" placeholder="Reason to Connect" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-get-touch">
                                <textarea name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-get-touch">
                                <button type="submit" name="submit" class="btn btn-default btn-sm">SEND MESSAGE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="choose-img">
                        <img src="{{asset('assets/img/ceo.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-contact-info">
                        <div class="icon">
                            <img src="{{asset('assets/img/map-pin-2.png')}}" alt="">
                        </div>
                        <div class="content">
                            <p>3827/7, ground floor, kanhiya nagar, New Delhi-110035</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-info">
                        <div class="icon">
                            <img src="{{asset('assets/img/envalope-3.png')}}" alt="">
                        </div>
                        <div class="content">
                            <p><a href="mailto:minfo@shivayfinancialconsultant.co">info@shivayfinancialconsultant.com</a> <br>reply within 2 Hours</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-info">
                        <div class="icon">
                            <img src="{{asset('assets/img/call-2.png')}}" alt="">
                        </div>
                        <div class="content">
                            <p><a href="tel:9650232300">+91 9650232300</a> <br>
                            <a href="tel:011-35742201">011 35742201</a> <br>Call @ 8.30am to 5.00pm </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start google map area -->
    <div class="googlemap-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7000.586807444014!2d77.15420263582811!3d28.680868599777952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02442ed81559%3A0x740e33fb4e4cbb90!2sKanhiya%20Nagar%2C%20Tri%20Nagar%2C%20Delhi%2C%20110035!5e0!3m2!1sen!2sin!4v1699006744454!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
    </div>
    <!-- end of google map area -->
@endsection