@extends("Layout.layouttwo")

@section("AdminContent")

<style>
    .form-control,
    .form-select {
        height: 38px; /* Uniform height for inputs and selects */
        padding: 6px 12px; /* Padding for inputs */
        border: 1px solid #ccc; /* Border style */
        transition: border-color 0.3s ease-in-out; /* Smooth transition on focus */
    }



    .form-label{
        font-weight: 600;
    }



    input[readonly]::placeholder {
        font-weight: 300;
    }


    select.form-select{
        font-weight: 300;
    }

    .date{
        font-weight: 300;
    }


    .form-control:focus,
    .form-select:focus {
        border-color: #b10937; /* Change border color on focus */
        box-shadow: none; /* Remove focus shadow */
    }

    .uniform-width {
        width: 100%; /* Full width for inputs */
    }

    .square-button {
        width: 80px; /* Set desired square size */
        height: 40px; /* Make height equal to width */
        border-radius: 0%; /* Remove any rounded corners */
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
</style>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container mt-4">
    <h1 style="font-size: 23px; font-weight:bolder;">User Management</h1><br>
    <form action="{{ route('Dashboard.admin.users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- User Details -->
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="f" class="form-label">First Name</label>
                <input type="text" class="form-control rounded-0 uniform-width" name="firstname"  value="{{ old('firstname') }}" required />
                @error('firstname')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            </div>

            <div class="col-md-3 mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input name="lastname" type="text" class="form-control rounded-0 uniform-width" value="{{ old('lastname') }}" required />

                @error('lastname')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">

                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>



        </div>

        <div class="row">
            <div class="col-md-3 mb-3">

                <label for="profile_img">Profile Image</label>
                <input type="file" name="profile_img" class="form-control" accept="image/*">
                @error('profile_img')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="gender">Gender</label>
            <select name="gender" class="form-control">
                <option value="">Select Gender</option>
                <option value="male" {{ old('gender') == 1 ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 2 ? 'selected' : '' }}>Female</option>
                <option value="gender" {{ old('gender') == 3 ? 'selected' : '' }}>Other</option>
            </select>
            @error('gender')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="col-md-3 mb-3">


                <label for="country">Country</label>
                <input type="text" name="country" class="form-control" value="{{ old('country') }}" required>
                @error('country')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">

                <label for="city">City</label>
                <input type="text" name="city" class="form-control" value="{{ old('city') }}">
                @error('city')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="role_id">Role</label>

                <select name="role_id" class="form-control" required>
                    <option value="1">Select</option>
                    {{-- @foreach($roles as $role) --}}
                    {{-- <option value="{{ $role->id }}">{{ $role->role_name }}</option> --}}
                    {{-- @endforeach --}}
                </select>
                @error('role_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>


            <div class="col-md-3 mb-3">
            <label for="organization">Organization</label>
            <input type="text" name="organization" class="form-control" value="{{ old('organization') }}" required>
            @error('organization')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-3 mb-3">
            <label for="zip_code">Zip Code</label>
            <input type="text" name="zip_code" class="form-control" value="{{ old('zip_code') }}" required>
            @error('zip_code')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>












        </div>

         <!-- Submit and cancel Buttons -->
         <div class="mb-3" style="display: flex; justify-content: flex-end; margin-top:1vh;">
            <a href="{{ url('users') }}" class="btn square-button" style="background-color:#6c757d;color:white;margin-right:10px;">Cancel</a>

            <button style="background-color:#b10937;color:white;" type="submit" class="btn square-button">Save</button>
            </div>

    </form>
</div>

@endsection
