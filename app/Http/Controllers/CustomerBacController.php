<?php

namespace App\Http\Controllers;
use App\Models\CustomerBac;
use Illuminate\Http\Request;

class CustomerBacController extends Controller
{
    //
    public function index()
    {
        $customers = CustomerBac::all();
        return view('Dashboard.admin.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new record.
     */
    public function add()
    {
        return view('Dashboard.admin.customer.add');
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

        CustomerBac::create([
            'title' => $request->title,
            'descripation' => $request->descripation,
            'img' => $path, // Store in database as "img"
        ]);

        return redirect()->route('Dashboard.admin.app_development.index')->with('success', 'Record added successfully.');
    }


    public function edit($id)
    {
        $customer = CustomerBac::findOrFail($id);
        return view('Dashboard.admin.customer.edit', compact('customer'));
    }

    /**
     * Update the specified record.
     */
    // public function update(Request $request, $id)
    // {
    //     $customer = CustomerBac::findOrFail($id);

    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255|unique:customer_bacs,email,' . $id,
    //         'phone' => 'required|string|max:20',
    //         'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //     ]);

    //     if ($request->hasFile('img')) {
    //         // Delete old image if exists
    //         if ($customer->img && file_exists(public_path($customer->img))) {
    //             unlink(public_path($customer->img));
    //         }

    //         // Upload new image
    //         $file = $request->file('img');
    //         $filename = time() . '_' . $file->getClientOriginalName();
    //         $path = 'Dashboard_assets/' . $filename;
    //         $file->move(public_path('Dashboard_assets'), $filename);

    //         // Update image column
    //         $customer->img = $path;
    //     }

    //     $customer->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'img' => $customer->img, // Keeps old image if no new one is uploaded
    //     ]);

    //     return redirect()->route('Dashboard.admin.customer.index')->with('success', 'Customer updated successfully.');
    // }

    /**
     * Remove the specified record.
     */
    public function destroy($id)
    {
        $customer = CustomerBac::findOrFail($id);

        // Delete associated image file
        if ($customer->img && file_exists(public_path($customer->img))) {
            unlink(public_path($customer->img));
        }

        $customer->delete();

        return redirect()->route('Dashboard.admin.customer.index')->with('success', 'Customer deleted successfully.');
    }
}
