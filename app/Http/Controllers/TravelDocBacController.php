<?php

namespace App\Http\Controllers;
use App\Models\TravelDoc;
use Illuminate\Http\Request;

class TravelDocBacController extends Controller
{
    //

    public function index()
    {
        $travelRecords = TravelDoc::all();
        return view('Dashboard.admin.travel.index', compact('travelRecords'));
    }

    /**
     * Show the form for creating a new record.
     */
    public function add()
    {
        return view('Dashboard.admin.travel.add');
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

        TravelDoc::create([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $path, // Store in database as "img"
        ]);

        return redirect()->route('Dashboard.admin.travel.index')->with('success', 'Record added successfully.');
    }

    /**
     * Show the form for editing the specified record.
     */
    public function edit($id)
    {
        $travelRecord = TravelDoc::findOrFail($id);
        return view('Dashboard.admin.travel.edit', compact('travelRecord'));
    }

    /**
     * Update the specified record.
     */
    public function update(Request $request, $id)
    {
        $travelRecord = TravelDoc::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:800',
            'descripation' => 'required|string|max:900',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('img')) {
            // Delete old image if exists
            if ($travelRecord->img && file_exists(public_path($travelRecord->img))) {
                unlink(public_path($travelRecord->img));
            }

            // Upload new image
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = 'Dashboard_assets/' . $filename;
            $file->move(public_path('Dashboard_assets'), $filename);

            // Update image column
            $travelRecord->img = $path;
        }

        $travelRecord->update([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $travelRecord->img, // Keeps old image if no new one is uploaded
        ]);

        return redirect()->route('Dashboard.admin.travel.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified record.
     */
    public function destroy($id)
    {
        $travelRecord = TravelDoc::findOrFail($id);

        // Delete associated image file
        if ($travelRecord->img && file_exists(public_path($travelRecord->img))) {
            unlink(public_path($travelRecord->img));
        }

        $travelRecord->delete();

        return redirect()->route('Dashboard.admin.travel.index')->with('success', 'Record deleted successfully.');
    }

}
