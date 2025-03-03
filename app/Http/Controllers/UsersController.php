<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users from the database
        return view('dashboard.admin.users.index', compact('users'));
    }

    public function add()
    {
        return view("Dashboard.admin.users.add");
    }

    public function store(Request $request)
    {
        // Debugging - Check if data is being received
        // dd($request->all());

        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'gender' => 'required|in:male,female,other',
            'city' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'role_id' => 'required|integer',
            'organization' => 'required|string|max:255',
            'profile_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle Profile Image Upload
        $path = null;
        if ($request->hasFile('profile_img')) {
            $file = $request->file('profile_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/profile_images'), $filename);
            $path = 'assets/profile_images/' . $filename;
        }

        // Create New User
        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'city' => $request->city,
            'country' => $request->country,
            'zip_code' => $request->zip_code,
            'role_id' => $request->role_id,
            'organization' => $request->organization,
            'profile_img' => $path,
        ]);

        return redirect()->route("Dashboard.admin.users.index")->with('success', 'User added successfully!');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view("Dashboard.admin.users.edit", compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
            'gender' => 'required|in:male,female,other',
            'city' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'role_id' => 'required|integer',
            'organization' => 'required|string|max:255',
            'profile_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('profile_img')) {
            $file = $request->file('profile_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/profile_images'), $filename);
            $user->profile_img = 'assets/profile_images/' . $filename;
        }

        $user->update($request->except(['password', 'profile_img']));

        return redirect()->route("Dashboard.admin.users.index")->with('success', 'User updated successfully!');
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route("Dashboard.admin.users.index")->with('success', 'User deleted successfully!');
    }
}
