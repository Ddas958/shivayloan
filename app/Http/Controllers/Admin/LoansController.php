<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use File;
use Illuminate\Support\Str;

use App\Models\Loan;

class LoansController extends Controller
{
    public function index()
    {
        $loans = Loan::all();
        return view('admin.loans.index', compact('loans'));
    }
    public function create()
    {
        return view('admin.loans.create');
    }

    public function store(Request $request)
    {
        $loan = new Loan;
        $loan->name = $request->input('name');
        $loan->slug = Str::slug($request->input('name'), '-');
        $loan->save();
        return Redirect::route('admin.Settings', 'loan-settings')->withSuccess('Loan Added Successfully');
    }

    public function edit($id)
    {
        $loan = Loan::find($id);
        return view('admin.loans.edit', compact('loan'));
    }

    public function update(Request $request, $id)
    {
        $loan = Loan::find($id);
        $loan->name = $request->input('name');
        $loan->update();
        return Redirect::route('admin.Settings', 'loan-settings')->withSuccess('Contact Updated Successfully');
    }

    public function destroy($id)
    {
        $loan = Loan::find($id);
        $loan->delete();
        return redirect()->back()->with('status','Loan Deleted Successfully');
    }
}
