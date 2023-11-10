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
use App\Models\City;
use App\Models\CityLoan;

class CityLoansController extends Controller
{
    public function index()
    {
        $cityloans = CityLoan::all();
        return view('admin.cityloans.index', compact('cityloans'));
    }

    public function create()
    {
        $loans = Loan::pluck('name', 'id')->toArray();
        $cities = City::pluck('name', 'id')->toArray();
        return view('admin.cityloans.create',compact('loans','cities'));
    }

    public function store(Request $request)
    {
       
        $loanid = $request->input('loan_id');
        $cityid = $request->input('city_id');
        $loan = Loan::where('id','=',$loanid)->first();
        $city = City::where('id','=',$cityid)->first();
        $loanincity = $loan->name.' in '.$city->name;
        $cityloan = new CityLoan;
        $cityloan->slug = Str::slug($loanincity, '-');
        $cityloan->loan_id = $loanid;
        $cityloan->city_id = $cityid;
        $is_slug_exist = CityLoan::where([['slug', Str::slug($loanincity, '-')]])->first();
        if ($is_slug_exist) {
          return Redirect::route('admin.Settings', 'cityloan-settings')->withError('A Loan already exists with same city.');
        }
        $cityloan->save();
        return Redirect::route('admin.Settings', 'cityloan-settings')->withSuccess('Loan Added Successfully');
    }

    public function edit($id)
    {
        $cityloan = CityLoan::find($id);
        $loans = Loan::pluck('name', 'id')->toArray();
        $cities = City::pluck('name', 'id')->toArray();
        return view('admin.cityloans.edit', compact('cityloan','loans','cities'));
    }

    public function update(Request $request, $id)
    {
        $cityloan = CityLoan::find($id);
        $cityloan->loan_id = $request->input('loan_id');
        $cityloan->city_id = $request->input('city_id');
        $cityloan->update();
        return Redirect::route('admin.Settings', 'cityloan-settings')->withSuccess('Loan Updated Successfully');
   
    }

    public function destroy($id)
    {
        $cityloan = CityLoan::find($id);
        $cityloan->delete();
        return redirect()->back()->with('status','Loan Deleted Successfully');
    }
}
