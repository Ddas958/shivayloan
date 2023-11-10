<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use File;
use Illuminate\Support\Str;

use App\Models\Bank;

class BanksController extends Controller
{
    public function index()
    {
        $banks = Bank::all();
        return view('admin.banks.index', compact('banks'));
    }
    public function create()
    {
        return view('admin.banks.create');
    }

    public function store(Request $request)
    {
        $bank = new Bank;
        $bank->name = $request->input('name');
        if($request->hasfile('bank_image'))
        {
            $file = $request->file('bank_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/banks/', $filename);
            $bank->image = $filename;
        }
        $bank->save();
        return Redirect::route('admin.Settings', 'bank-settings')->withSuccess('Banking Partner added successfully');
    }

    public function edit($id)
    {
        $bank = Bank::find($id);
        return view('admin.banks.edit', compact('bank'));
    }

    public function update(Request $request, $id)
    {
        $bank = Bank::find($id);
        $bank->name = $request->input('name');
        if($request->hasfile('bank_image'))
        {
            $destination = 'uploads/banks/'.$bank->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('bank_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/banks/', $filename);
            $bank->image = $filename;
        }
        $bank->update();
        return Redirect::route('admin.Settings', 'bank-settings')->withSuccess('Banking partner updated successfully');
    }

    public function destroy($id)
    {
        $bank = Bank::find($id);
        $bank->delete();
        return redirect()->back()->with('status','Banking partner Deleted Successfully');
    }
}
