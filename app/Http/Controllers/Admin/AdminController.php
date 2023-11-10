<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\PageMetaTag;
use App\Models\Contact;
use App\Models\Loan;
use App\Models\LoanFaq;
use App\Models\Apply;
use App\Models\CityLoan;
use App\Models\Partner;
use App\Models\Bank;
use App\Models\Offer;



class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function Profile(){
        $user = User::where('name','=','Admin')->first();
        
        return view('admin.settings.profile', compact('user'));
    }
    public function SaveProfile(Request $request){
        $request->validate([
            'username' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ],
        [

        ]);
        $id = $request->input('userid');
        $password = Hash::make($request->input('password'));
        $user = User::find($id);
        $user->email = $request->input('username');
        $user->password = $password;
        $user->update();
        return Redirect::route('admin.Profile')->withSuccess('Profile Updated Successfully');
    }

    public function Settings($slug = NULL)
    {
        $loans = Loan::all();
        $cityloans = CityLoan::all();
        $contacts = Contact::all();
        $partners = Partner::all();
        $banks = Bank::all();
        $offers = Offer::all();
        $enquiries = Apply::all();
        $faqs = LoanFaq::all();
       return view('admin.settings.' . $slug, compact('contacts','loans','cityloans','partners','banks','offers','enquiries','faqs'));
    }

    //Saving  Settings
    public function SaveSettings(Request $request, $slug)
    {
        foreach ($request->all() as $key => $value) {
            if (!in_array($key, ['_token', 'Settings_Type'], true)) {
                $this->Save_Meta_Tags($request->Settings_Type, $key, $value, $request);
            }
        }
        return Redirect::route('admin.Settings', $slug)->withSuccess('Settings Updated');
    }


    //saving meta tags
    private function Save_Meta_Tags($type, $key, $value, $request)
    {
        $tag = PageMetaTag::where('type', '=', $type)->where('key', '=', $key)->first();
        if ($tag) {
            $file_path = public_path('/storage/' . $tag->value);
        } else {
            $tag = new PageMetaTag;
            $file_path = $type;
        }

        $tag->type = $type;
        $tag->key = $key;
        $tag->value = $value;
        $tag->save();
    }

}
