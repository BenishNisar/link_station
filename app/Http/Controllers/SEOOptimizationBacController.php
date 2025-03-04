<?php

namespace App\Http\Controllers;
use App\Models\SEO;
use Illuminate\Http\Request;

class SEOOptimizationBacController extends Controller
{
    //
    public function index()
    {
        $seoRecords = SEO::all();
        return view('Dashboard.admin.seo_opt.index', compact('seoRecords'));
    }


    public function add()
    {
        return view('Dashboard.admin.seo_opt.add');
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

        SEO::create([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $path,
        ]);

        return redirect()->route('Dashboard.admin.seo_opt.index')->with('success', 'Record added successfully.');
    }

    public function edit($id)
    {
        $seoRecord = SEO::findOrFail($id);
        return view('Dashboard.admin.seo_opt.edit', compact('seoRecord'));
    }


    public function update(Request $request, $id)
    {
        $seoRecord = SEO::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:800',
            'descripation' => 'required|string|max:900',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('img')) {

            if ($seoRecord->img && file_exists(public_path($seoRecord->img))) {
                unlink(public_path($seoRecord->img));
            }


            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = 'Dashboard_assets/' . $filename;
            $file->move(public_path('Dashboard_assets'), $filename);

            $seoRecord->img = $path;
        }

        $seoRecord->update([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $seoRecord->img,
        ]);

        return redirect()->route('Dashboard.admin.seo_opt.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified record.
     */
    public function destroy($id)
    {
        $seoRecord = SEO::findOrFail($id);


        if ($seoRecord->img && file_exists(public_path($seoRecord->img))) {
            unlink(public_path($seoRecord->img));
        }

        $seoRecord->delete();

        return redirect()->route('Dashboard.admin.seo_opt.index')->with('success', 'Record deleted successfully.');
    }
}
