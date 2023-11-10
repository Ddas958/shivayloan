<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use File;
use Illuminate\Support\Str;

use App\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('admin.contacts.view', compact('contact'));
    }
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contacts = Contact::find($id);
        $contacts->name = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->subject = $request->input('subject');
        $contacts->message = $request->input('message');
        $contacts->update();
        return Redirect::route('admin.Settings', 'contact-settings')->withSuccess('Contact Updated Successfully');
    }

    public function destroy($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect()->back()->with('status','Contact Deleted Successfully');
    }
}
