<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use File;
use Illuminate\Support\Str;

use App\Models\Apply;

class EnquiriesController extends Controller
{
    public function index()
    {
        $enquiries = Apply::all();
        return view('admin.enquiries.index', compact('enquiries'));
    }
    public function show($id)
    {
        $enquiry = Apply::find($id);
        return view('admin.enquiries.view', compact('enquiry'));
    }

    public function edit($id)
    {
        $enquiry = Apply::find($id);
        return view('admin.enquiries.edit', compact('enquiry'));
    }

    public function update(Request $request, $id)
    {
        $enquiry = Apply::find($id);
        $enquiry->update();
        return Redirect::route('admin.Settings', 'enquiry-settings')->withSuccess('Enquiry Updated Successfully');
    }

    public function destroy($id)
    {
        $enquiry = Apply::find($id);
        $enquiry->delete();
        return redirect()->back()->with('status','Enquiry Deleted Successfully');
    }
}
