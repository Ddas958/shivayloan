<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Carbon;
use App\Models\Contact;
use App\Models\Apply;
use App\Models\Partner;
use App\Models\Loan;
use App\Models\Bank;
use App\Models\Offer;


class FrontpageController extends Controller
{
    Public function index(){
        $global_banks = Bank::all();
        return view('home',compact('global_banks'));
    }

    public function Offer(){
        $offers = Offer::all();
        $loans = Loan::all();
        
        return view('offer',compact('offers','loans'));
    }

    public function Partner(){
        return view('partner');
    }
    public function addPartner(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|min:10',
            'email' => 'required|email',
        ],
        [
            'first_name.required' => 'First Name is a mandatory field',
            'last_name.required' => 'Last Name is a mandatory field',
            'phone.required' => 'Phone is a mandatory field',
            'email.required' => 'Email is invalid',

        ]
        );
        $partner = new Partner;
        $partner->first_name = $request->input('first_name');
        $partner->last_name = $request->input('last_name');
        $partner->email = $request->input('email');
        $partner->phone = $request->input('phone');
        $partner->save();
        return Redirect::route('partner')->withSuccess('Form has been submitted Successfully. We will get back to you soon.');
    }

    public function loandetail($loandetail = null){
        return view('loan-details');
    }

    public function Apply(){
        return view('apply');
    }
    public function loanApply(Request $request){
        //dd($request);
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required',
            'occupation' => 'required',
            'phone' => 'required|min:10',
            'email' => 'required|email',
        ],
        [
            'fname.required' => 'First Name is a mandatory field',
            'lname.required' => 'Last Name is a mandatory field',
            'phone.required' => 'Phone is a mandatory field',
            'email.required' => 'Email is invalid',

        ]
        );
        $apply = new Apply;
        $apply->first_name = $request->input('fname');
        $apply->last_name = $request->input('lname');
        $apply->email = $request->input('email');
        $apply->phone = $request->input('phone');
        $apply->state = $request->input('state');
        $apply->city = $request->input('city');
        $apply->pincode = $request->input('pincode');
        $apply->occupation = $request->input('occupation');
        $apply->save();
        return Redirect::route('apply')->withSuccess('Form has been submitted Successfully. We will get back to you soon.');
    }

    public function Contact(){
        return view('contact');
    }
    public function addContact(Request $request){
        //dd($request);
        $request->validate([
            'name' => 'required',
            'phone' => 'required|min:10',
            'email' => 'required|email',
        ],
        [
            'name.required' => 'Name is a mandatory field',
            'phone.required' => 'Phone is a mandatory field',
            'email.required' => 'Email is invalid',

        ]
        );
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->state = $request->input('state');
        $contact->city = $request->input('city');
        $contact->reason = $request->input('reason');
        $contact->message = $request->input('message');
        $contact->save();
        return Redirect::route('contact')->withSuccess('Form has been submitted Successfully. We will get back to you soon.');
    }

    Public function About(){
        return view('about');
    }

    public function Registration(){
        return view('online-registration');
    }    
    
}
