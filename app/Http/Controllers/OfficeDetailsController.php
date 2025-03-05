<?php

namespace App\Http\Controllers;
use App\Models\OfficeDet;
use Illuminate\Http\Request;

class OfficeDetailsController extends Controller
{
    //

    public function index()
    {
        $office = OfficeDet::all();
        return view('Dashboard.admin.officedetails.index', compact('office'));
    }


    public function add()
    {
        return view('Dashboard.admin.officedetails.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|string',
        ]);

        OfficeDet::create([
            'location' => $request->location,
            'email' => $request->email,
            'contact' => $request->contact,
        ]);

        return redirect()->route('Dashboard.admin.officedetails.index')->with('success', 'Contact message saved successfully.');
    }


    public function edit($id)
    {
        $office = OfficeDet::findOrFail($id);
        return view('Dashboard.admin.officedetails.edit', compact('office'));
    }


    public function update(Request $request, $id)
    {
        $office = OfficeDet::findOrFail($id);

        $request->validate([
            'location' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|string',
        ]);

        $office->update([
            'location' => $request->location,
            'email' => $request->email,
            'contact' => $request->contact,
        ]);

        return redirect()->route('Dashboard.admin.officedetails.index')->with('success', 'Contact message updated successfully.');
    }

    public function destroy($id)
    {
        $office = OfficeDet::findOrFail($id);
        $office->delete();

        return redirect()->route('Dashboard.admin.officedetails.index')->with('success', 'Contact message deleted successfully.');
    }

}
