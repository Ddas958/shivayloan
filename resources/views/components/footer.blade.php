<!-- start footer area -->
<section class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="footer-widget">
                        <div class="mb-4">
                        <img src="{{ asset('assets/img/logo/footer-logo.png') }}" class="black_logo" alt="logo" width="">
                        </div>
                        <p >Wе’rе hеrе to рrоvіdе уоu wіth fіnаnсіаl ѕоlutіоnѕ fоr аll уоur lеndіng needs.</p>
                      
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="footer-widget pages-widget">
                        <div class="footer-title">
                            <h4>Loans</h4>
                        </div>
                        <ul>
                            @foreach($global_loans as $loan)
                                <li><a href="/{{$loan->slug}}">{{$loan->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-lg-3">
                    <div class="footer-widget pages-widget">
                        <div class="footer-title">
                            <h4>Knowledge Hub</h4>
                        </div>
                        <ul>
                            @foreach($global_loans as $loan)
                                <li><a href="/{{$loan->slug}}">{{$loan->name}} Guide</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h4>Contact</h4>
                        </div>
                        <div class="contact-widget">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/img/map-pin.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <p>3827/7, ground floor, kanhiya nagar, New Delhi-110035</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/img/envalope-2.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <p><a href="mailto:minfo@shivayfinancialconsultant.co">info@shivayfinancialconsultant.com</a>
                                            <span>Reply within 2 Hours</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/img/call.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <p>
                                            <a href="tel:9650232300">+91 9650232300</a><br>
                                            <a href="tel:011-35742201">011 35742201</a>
                                            <span>Call @ 8.30am to 5.00pm </span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="copy-right-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <div class="copyright-text">
                        <p><i class="fa fa-copyright"></i> 2023 Shivay Financial Consultant. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="footer-nave">
                        <a href="https://www.facebook.com/shivayfinancial" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="https://twitter.com/ShivayFin" target="_blank"><i class="fa fa-twitter-square"></i></a>
                        <a href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                        <a href="https://www.instagram.com/shivayfinancialconsultantind/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://in.pinterest.com/shivayfinancialconsultant/" target="_blank"><i class="fa fa-pinterest-square"></i></a>
                        <a href="https://www.youtube.com/channel/UCXB1FekXB2HgwbxSOyIWRRw" target="_blank"><i class="fa fa-youtube-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    <a href="https://wa.me/9650232300" class="whatsapp_btn" target="_blank">
        <img src="{{asset('assets/img/whatsapp.png')}}" alt="">
    </a>
    </div>
    <!-- end of footer area -->