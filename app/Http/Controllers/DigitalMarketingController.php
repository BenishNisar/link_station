<?php

namespace App\Http\Controllers;
use App\Models\DigitalMark;
use Illuminate\Http\Request;

class DigitalMarketingController extends Controller
{
    //
    public function index()
    {
        $digitalMarketingRecords = DigitalMark::all();
        return view('Dashboard.admin.digital_market.index', compact('digitalMarketingRecords'));
    }

    /**
     * Show the form for creating a new record.
     */
    public function add()
    {
        return view('Dashboard.admin.digital_market.add');
    }

    /**
     * Store a newly created record.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:800',
            'descripation' => 'required|string|max:900',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = 'Dashboard_assets/' . $filename;
            $file->move(public_path('Dashboard_assets'), $filename);
        }

        DigitalMark::create([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $path, // Store in database as "img"
        ]);

        return redirect()->route('Dashboard.admin.digital_market.index')->with('success', 'Record added successfully.');
    }

    /**
     * Show the form for editing the specified record.
     */
    public function edit($id)
    {
        $digitalMarketing = DigitalMark::findOrFail($id);
        return view('Dashboard.admin.digital_market.edit', compact('digitalMarketing'));
    }

    /**
     * Update the specified record.
     */
    public function update(Request $request, $id)
    {
        $digitalMarketing = DigitalMark::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:800',
            'descripation' => 'required|string|max:900',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('img')) {
            // Delete old image if exists
            if ($digitalMarketing->img && file_exists(public_path($digitalMarketing->img))) {
                unlink(public_path($digitalMarketing->img));
            }

            // Upload new image
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = 'Dashboard_assets/' . $filename;
            $file->move(public_path('Dashboard_assets'), $filename);

            // Update image column
            $digitalMarketing->img = $path;
        }

        $digitalMarketing->update([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $digitalMarketing->img, // Keeps old image if no new one is uploaded
        ]);

        return redirect()->route('Dashboard.admin.digital_market.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified record.
     */
    public function destroy($id)
    {
        $digitalMarketing = DigitalMark::findOrFail($id);

        // Delete associated image file
        if ($digitalMarketing->img && file_exists(public_path($digitalMarketing->img))) {
            unlink(public_path($digitalMarketing->img));
        }

        $digitalMarketing->delete();

        return redirect()->route('Dashboard.admin.digital_market.index')->with('success', 'Record deleted successfully.');
    }


}
