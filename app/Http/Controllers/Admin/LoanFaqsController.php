<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use File;
use Illuminate\Support\Str;

use App\Models\Loan;
use App\Models\LoanFaq;

class LoanFaqsController extends Controller
{
    public function index()
    {
        $loanfaqs = LoanFaq::all();
        return view('admin.loanfaqs.index', compact('loanfaqs'));
    }
    public function create()
    {
        $loans = Loan::pluck('name', 'id')->toArray();
        return view('admin.loanfaqs.create',compact('loans'));
    }

    public function store(Request $request)
    {
        $loanfaq = new LoanFaq;
        $loanfaq->loan_id = $request->input('loan_id');
        $loanfaq->question = $request->input('question');
        $loanfaq->answer = $request->input('answer');
        $loanfaq->save();
        return Redirect::route('admin.Settings', 'loan-settings')->withSuccess('Loan Faq Added Successfully');
    }

    public function edit($id)
    {
        $loanfaq = LoanFaq::find($id);
        $loans = Loan::pluck('name', 'id')->toArray();
        return view('admin.loanfaqs.edit', compact('loanfaq','loans'));
    }

    public function update(Request $request, $id)
    {
        $loanfaq = LoanFaq::find($id);
        $loanfaq->loan_id = $request->input('loan_id');
        $loanfaq->question = $request->input('question');
        $loanfaq->answer = $request->input('answer');
        $loanfaq->update();
        return Redirect::route('admin.Settings', 'loan-settings')->withSuccess('Loan Faq Updated Successfully');
    }

    public function destroy($id)
    {
        $loanfaq = LoanFaq::find($id);
        $loanfaq->delete();
        return redirect()->back()->with('status','Loan Faq Deleted Successfully');
    }
}
