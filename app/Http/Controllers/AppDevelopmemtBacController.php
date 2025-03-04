<?php

namespace App\Http\Controllers;
use App\Models\AppDev;
use Illuminate\Http\Request;

class AppDevelopmemtBacController extends Controller
{
    //


    public function index()
    {
        $appDevelopments = AppDev::all();
        return view('Dashboard.admin.app_development.index', compact('appDevelopments'));
    }

    /**
     * Show the form for creating a new record.
     */
    public function add()
    {
        return view('Dashboard.admin.app_development.add');
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

        AppDev::create([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $path, // Store in database as "img"
        ]);

        return redirect()->route('Dashboard.admin.app_development.index')->with('success', 'Record added successfully.');
    }

    /**
     * Show the form for editing the specified record.
     */
    public function edit($id)
    {
        $appdevelopment = AppDev::findOrFail($id);
        return view('Dashboard.admin.app_development.edit', compact('appdevelopment'));
    }

    /**
     * Update the specified record.
     */
    public function update(Request $request, $id)
    {
        $appDevelopment = AppDev::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:800',
            'descripation' => 'required|string|max:900',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('img')) {
            // Delete old image if exists
            if ($appDevelopment->img && file_exists(public_path($appDevelopment->img))) {
                unlink(public_path($appDevelopment->img));
            }

            // Upload new image
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = 'Dashboard_assets/' . $filename;
            $file->move(public_path('Dashboard_assets'), $filename);

            // Update image column
            $appDevelopment->img = $path;
        }

        $appDevelopment->update([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $appDevelopment->img, // Keeps old image if no new one is uploaded
        ]);

        return redirect()->route('Dashboard.admin.app_development.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified record.
     */
    public function destroy($id)
    {
        $appDevelopment = AppDev::findOrFail($id);

        // Delete associated image file
        if ($appDevelopment->img && file_exists(public_path($appDevelopment->img))) {
            unlink(public_path($appDevelopment->img));
        }

        $appDevelopment->delete();

        return redirect()->route('Dashboard.admin.app_development.index')->with('success', 'Record deleted successfully.');
    }



}
