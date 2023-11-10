@section('metatitle',Get_Meta_Tag_Value('Partner_Settings','Meta_Title'))
@section('metakeyword',Get_Meta_Tag_Value('Partner_Settings','Meta_Keyword'))
@section('metadescription',Get_Meta_Tag_Value('Partner_Settings','Meta_Description'))
@extends('layout')
@section('content')
    <!-- start page header section -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>BECOME A PARTNER</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Become a Partner</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header section -->

    <!-- End partner section -->
    <section class="services-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="services-details ">
                        <div class="section-title">
                            <h2>Who can Become a Partner with Shivay Financial Consultant?</h2>
                        </div>
                        <p>Team Shivay Financial Consultant extends a warm invitation to individuals possessing exceptional interpersonal skills and a fervent passion for success. Become an integral part of our team, where your unique talents merge seamlessly with our dynamic environment, propelling you towards a shared journey of financial excellence.</p>
                        
                        <h5>Why Partner With Shivay Financial Consultant? - Benefits And Perks</h5>
                        <ul>
                            <li>Lines of credit</li>
                            <li>Commercial Mortgages.</li>
                            <li>Installment Loans.</li>
                            <li>Cоnѕtruсtіоn / Dеvеlорmеnt Loans.</li>
                            <li>SBA Loans</li>
                            <li>Commercial Rеаl Eѕtаtе</li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="sidebar-area">
                        <div class="single-sidebar">
                            <div class="get-in-touch">
                                <h4>Become a Partner</h4>
                            </div>
                            <form action="{{route('addPartner')}}" method="POST">
                                @csrf
                                <div class="row list-input">
                                    <div class="col-md-12 mr0">
                                        <div class="single-get-touch">
                                            <input type="text" name="first_name" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mr0">
                                        <div class="single-get-touch">
                                            <input type="text" name="last_name" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-get-touch">
                                            <input type="text" name="phone" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-get-touch">
                                            <input type="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-get-touch">
                                           <button type="submit" name="submit" class="btn btn-default btn-sm">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 col-lg-12 py-4">
                    <h2>Who can Become a Partner with Shivay Financial Consultant?</h2>
                    <p>Individuals with strong interpersonal skills and a zeal for success are welcome to join the dynamic community of Shivay Financial Consultant. </p>
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <div class="single-improvement">
                                <div class="icon">
                                    <span class="pe-7s-angle-right-circle"></span>
                                </div>
                                <h4>Loan Agent</h4>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="single-improvement">
                                <div class="icon">
                                    <span class="pe-7s-note2"></span>
                                </div>
                                <h4>Ex-Banker</h4>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="single-improvement">
                                <div class="icon">
                                    <span class="pe-7s-delete-user"></span>
                                </div>
                                <h4>Financial Analyst</h4>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="single-improvement">
                                <div class="icon">
                                    <span class="pe-7s-delete-user"></span>
                                </div>
                                <h4>Mutual Fund Agent</h4>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="single-improvement">
                                <div class="icon">
                                    <span class="pe-7s-delete-user"></span>
                                </div>
                                <h4>Chartered Accountant</h4>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="single-improvement">
                                <div class="icon">
                                    <span class="pe-7s-delete-user"></span>
                                </div>
                                <h4>Builder</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h2 class="py-4">Process Of Becoming a Partner</h2>
                    <p>Embarking on a successful DSA career begins with partnering with Shivay Financial Consultant. Contact us on info@shivayfinancialconsultant.com and our team will guide you.</p>
                </div>
            </div>
            <div class="row process-list py-4">
                <div class="col-lg-3 col-md-6 process text-center">
                    <div class="single-process">
                        <div class="proces-icon">
                            <span class="pe-7s-note"></span>
                        </div>
                        <div class="content">
                            <h4 class="process-title">Apply</h4>
                            <p>Click on "Apply Now", fill in the Loan DSA Partner registration details, and submit along with the documents.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 process text-center">
                    <div class="single-process">
                        <div class="proces-icon">
                            <span class="pe-7s-id"></span>
                        </div>
                        <div class="content">
                            <h4 class="process-title">Expect a Call</h4>
                            <p>The Shivay Financial Consultant support team will call you to guide and coordinate a meeting with you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 process text-center">
                    <div class="single-process">
                        <div class="proces-icon">
                            <span class="pe-7s-check"></span>
                        </div>
                        <div class="content">
                            <h4 class="process-title">Meet</h4>
                            <p>At the meeting, a Shivay Financial Consultant Manager will explain all you need to know, including the process to follow while generating leads.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 process text-center">
                    <div class="single-process">
                        <div class="proces-icon">
                            <span class="pe-7s-cash"></span>
                        </div>
                        <div class="content">
                            <h4 class="process-title">Sign DSA Agreement</h4>
                            <p>After signing the DSA agreement, you will become a Shivay Financial Consultant Partner and can start earning instantly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End partner section -->

    <!-- start brand section -->
    <x-banking-partner/>
    <!-- end of brand section -->
@endsection