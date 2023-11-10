<section class="brand-section">
        <div class="container" >
            <div class="section-title py-3">
                <h2 align="center">Our Banking Partners</h2>
                <h5 align="center">Get Loans from More Than 200 Partners</h5>
            </div>
            <div class="brand-slider owl-carousel">
           
            @foreach($global_banks as $bank)
            
                <div class="single-brand">
                    <img src="{{ asset('uploads/banks/'.$bank->image) }}" alt="" />
                </div>
            @endforeach
               
            </div>
        </div>
    </section>