<section class="calculator-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>EMI Calculator</h2>
                    <p>Check your EMI based on the loan amount, tenure, and the interest rate</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 loan-slider-box">
                <div class="single-loan-slider">
                    <h4>Loan Amount</h4>
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
                    <a href="{{route('apply')}}" class="btn applybtn btn-default btn-sm" >APPLY NOW</a>
                </div>
            </div>
        </div>
    </div>
</section>