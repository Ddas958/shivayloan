<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Carbon;
use App\Models\Contacts;
use App\Models\Partner;
use App\Models\Bank;
use App\Models\Loan;
use App\Models\LoanTab;
use App\Models\LoanFaq;
use App\Models\City;
use App\Models\CityLoan;


class LoanController extends Controller
{

    public function loanDetail($loandetail = null){
        $loandetail = Loan::where('slug','=',$loandetail)->first();
        $feature = LoanTab::where('loan_id','=',$loandetail->id)->where('key','=','Features')->first();
        $eligibility = LoanTab::where('loan_id','=',$loandetail->id)->where('key','=','Eligibility')->first();
        $documents = LoanTab::where('loan_id','=',$loandetail->id)->where('key','=','Documents')->first();
        $emi = LoanTab::where('loan_id','=',$loandetail->id)->where('key','=','EMI Calculator')->first();
        $fee = LoanTab::where('loan_id','=',$loandetail->id)->where('key','=','Fees and Charges')->first();

        $loan_cities = CityLoan::where('loan_id','=',$loandetail->id)->get();
        $loan_faqs = LoanFaq::where('loan_id','=',$loandetail->id)->get();
        $loan_cities_id = CityLoan::where('loan_id','=',$loandetail->id)->pluck('city_id');
        $cities = City::whereIn('id',$loan_cities_id)->get();

        return view('loan-details',compact('loandetail','feature','eligibility','documents','emi','fee','loan_cities','cities','loan_faqs'));
    }
    public function loanCityDetail($loandetail = null, $cityloandetail = null){
        $loandetail = Loan::where('slug','=',$loandetail)->first();
        $cityloandetail = CityLoan::where('slug','=',$cityloandetail)->first();
        $feature = LoanTab::where('loan_id','=',$loandetail->id)->where('key','=','Features')->first();
        $eligibility = LoanTab::where('loan_id','=',$loandetail->id)->where('key','=','Eligibility')->first();
        $documents = LoanTab::where('loan_id','=',$loandetail->id)->where('key','=','Documents')->first();
        $emi = LoanTab::where('loan_id','=',$loandetail->id)->where('key','=','EMI Calculator')->first();
        $fee = LoanTab::where('loan_id','=',$loandetail->id)->where('key','=','Fees and Charges')->first();

        $loan_cities = CityLoan::where('loan_id','=',$loandetail->id)->get();
        $loan_cities_id = CityLoan::where('loan_id','=',$loandetail->id)->pluck('city_id');
        $cities = City::whereIn('id',$loan_cities_id)->get();

        return view('city-loan-details',compact('loandetail','cityloandetail','feature','eligibility','documents','emi','fee','loan_cities','cities'));
    }

}
