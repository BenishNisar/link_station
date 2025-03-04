<?php

namespace App\Http\Controllers;
use App\Models\PackageDet;
use Illuminate\Http\Request;

class PackageDetailsBacController extends Controller
{
    //
    public function index()
    {
        $packagingdetails = PackageDet::all();
        return view('Dashboard.admin.package_detail.index', compact('packagingdetails'));
    }

    /**
     * Show the form for creating a new record.
     */
    public function add()
    {

        return view('Dashboard.admin.package_detail.add');
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

        PackageDet::create([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $path, // Store in database as "img"
        ]);

        return redirect()->route('Dashboard.admin.package_detail.index')->with('success', 'Record added successfully.');
    }


    /**
     * Show the form for editing the specified record.
     */
    public function edit($id)
    {
        $packaging_details = PackageDet::findOrFail($id);
        return view('Dashboard.admin.package_detail.edit', compact('packaging_details'));
    }


    public function update(Request $request, $id)
    {
        $packagingdetails = PackageDet::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:800',
            'descripation' => 'required|string|max:900',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('img')) {
            // Delete old image if exists
            if ($packagingdetails->img && file_exists(public_path($packagingdetails->img))) {
                unlink(public_path($packagingdetails->img));
            }

            // Upload new image
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = 'Dashboard_assets/' . $filename;
            $file->move(public_path('Dashboard_assets'), $filename);

            // Update image column
            $packagingdetails->img = $path;
        }

        $packagingdetails->update([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $packagingdetails->img, // Keeps old image if no new one is uploaded
        ]);

        return redirect()->route('Dashboard.admin.package_detail.index')->with('success', 'Record updated successfully.');
    }


    /**
     * Remove the specified record.
     */
    public function destroy($id)
    {
        $webDevelopment = PackageDet::findOrFail($id);

        // Delete associated image file
        if ($webDevelopment->img && file_exists(public_path($webDevelopment->img))) {
            unlink(public_path($webDevelopment->img));
        }

        $webDevelopment->delete();

        return redirect()->route('dashboard.admin.package_detail.index')->with('success', 'Record deleted successfully.');
    }

}
