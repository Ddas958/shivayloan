<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use File;
use Illuminate\Support\Str;

use App\Models\Offer;
use App\Models\Loan;
use App\Models\Bank;

class OffersController extends Controller
{
    public function index()
    {
        $offer = Offer::all();
        return view('admin.offers.index', compact('offers'));
    }

    public function create()
    {
        $loans = Loan::pluck('name', 'id')->toArray();
        $banks = Bank::pluck('name', 'id')->toArray();
        return view('admin.offers.create',compact('loans','banks'));
    }

    public function store(Request $request)
    {
        
        $offer = new Offer;
        $offer->loan_id = $request->input('loan_id');
        $offer->bank_id = $request->input('bank_id');
        $offer->roi = $request->input('roi');
        $offer->emi = $request->input('emi');
        $offer->description = $request->input('description');
        $offer->save();
        return Redirect::route('admin.Settings', 'offer-settings')->withSuccess('Offer Added Successfully');
    }

    public function edit($id)
    {
        $offer = Offer::find($id);
        $loans = Loan::pluck('name', 'id')->toArray();
        $banks = Bank::pluck('name', 'id')->toArray();
        return view('admin.offers.edit', compact('offer','loans','banks'));
    }

    public function update(Request $request, $id)
    {
        $offer = Offer::find($id);
        $offer->loan_id = $request->input('loan_id');
        $offer->bank_id = $request->input('bank_id');
        $offer->roi = $request->input('roi');
        $offer->emi = $request->input('emi');
        $offer->description = $request->input('description');
        $offer->update();
        return Redirect::route('admin.Settings', 'offer-settings')->withSuccess('Offer Updated Successfully');
   
    }

    public function destroy($id)
    {
        $offer = Offer::find($id);
        $offer->delete();
        return redirect()->back()->with('status','Offer Deleted Successfully');
    }
}
