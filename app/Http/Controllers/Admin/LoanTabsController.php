<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use File;
use Illuminate\Support\Str;

use App\Models\Loan;
use App\Models\LoanTab;

class LoanTabsController extends Controller
{
    public function index()
    {
        $loantabs = LoanTab::all();
        return view('admin.loantabs.index', compact('loantabs'));
    }
    public function create()
    {
        $loans = Loan::pluck('name', 'id')->toArray();
        return view('admin.loantabs.create',compact('loans'));
    }

    public function store(Request $request)
    {
        $loantab = new LoanTab;
        $loantab->loan_id = $request->input('loan_id');
        $loantab->key = $request->input('tab_name');
        $loantab->value = $request->input('tab_value');
        $loantab->save();
        return Redirect::route('admin.loantabs')->withSuccess('Loan Tab Added Successfully');
    }

    public function edit($id)
    {
        $loantab = LoanTab::find($id);
        $loans = Loan::pluck('name', 'id')->toArray();
        return view('admin.loantabs.edit', compact('loantab','loans'));
    }

    public function update(Request $request, $id)
    {
        $loantab = LoanTab::find($id);
        $loantab->loan_id = $request->input('loan_id');
        $loantab->key = $request->input('tab_name');
        $loantab->value = $request->input('tab_value');
        $loantab->update();
        return Redirect::route('admin.Settings', 'loan-settings')->withSuccess('Loan Tab Updated Successfully');
    }

    public function destroy($id)
    {
        $loantab = LoanTab::find($id);
        $loantab->delete();
        return redirect()->back()->with('status','Loan Tab Deleted Successfully');
    }
}
