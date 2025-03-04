<?php

namespace App\Http\Controllers;
use App\Models\WebDevelopment;
use Illuminate\Http\Request;

class WebDevelopmentBacController extends Controller
{
    public function index()
    {
        $webDevelopments = WebDevelopment::all();
        return view('Dashboard.admin.web_development.index', compact('webDevelopments'));
    }

    /**
     * Show the form for creating a new record.
     */
    public function add()
    {
        $webDevelopments = WebDevelopment::all();
        return view('Dashboard.admin.web_development.add', compact('webDevelopments'));
    }

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

        WebDevelopment::create([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $path, // Store in database as "img"
        ]);

        return redirect()->route('Dashboard.admin.web_development.index')->with('success', 'Record added successfully.');
    }


    /**
     * Show the form for editing the specified record.
     */
    public function edit($id)
    {
        $webDevelopment = WebDevelopment::findOrFail($id);
        return view('Dashboard.admin.web_development.edit', compact('webDevelopment'));
    }

    public function update(Request $request, $id)
    {
        $webDevelopment = WebDevelopment::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:800',
            'descripation' => 'required|string|max:900',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('img')) {
            // Delete old image if exists
            if ($webDevelopment->img && file_exists(public_path($webDevelopment->img))) {
                unlink(public_path($webDevelopment->img));
            }

            // Upload new image
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = 'Dashboard_assets/' . $filename;
            $file->move(public_path('Dashboard_assets'), $filename);

            // Update image column
            $webDevelopment->img = $path;
        }

        $webDevelopment->update([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $webDevelopment->img, // Keeps old image if no new one is uploaded
        ]);

        return redirect()->route('Dashboard.admin.web_development.index')->with('success', 'Record updated successfully.');
    }


    /**
     * Remove the specified record.
     */
    public function destroy($id)
    {
        $webDevelopment = WebDevelopment::findOrFail($id);

        // Delete associated image file
        if ($webDevelopment->img && file_exists(public_path($webDevelopment->img))) {
            unlink(public_path($webDevelopment->img));
        }

        $webDevelopment->delete();

        return redirect()->route('dashboard.admin.web_development.index')->with('success', 'Record deleted successfully.');
    }



}
