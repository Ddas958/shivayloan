<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use File;
use Illuminate\Support\Str;

use App\Models\Partner;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('admin.contacts.edit', compact('contact'));
    }

    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        return redirect()->back()->with('status','Partner Deleted Successfully');
    }
}
