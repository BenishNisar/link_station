@extends("Layout.layouttwo")
@section("AdminContent")

<div class="container">
    <h2>Edit User</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('Dashboard.admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- User Details -->
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" value="{{ $user->firstname }}" required />
                @error('firstname') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}" required />
                @error('lastname') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
                <small>Leave blank to keep the current password.</small>
                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="profile_img">Profile Image</label><br>
                @if($user->profile_img)
                    <img src="{{ asset($user->profile_img) }}" class="img-thumbnail" width="80px" height="80px" alt="Profile Image">
                @endif
                <input type="file" name="profile_img" class="form-control mt-2" accept="image/*">
                @error('profile_img') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control">
                    <option value="">Select Gender</option>
                    <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ $user->gender == 'other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('gender') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="country">Country</label>
                <input type="text" name="country" class="form-control" value="{{ $user->country }}" required>
                @error('country') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" value="{{ $user->city }}">
                @error('city') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="role_id">Role</label>
                <select name="role_id" class="form-control" required>
                    <option value="1">Select</option>

{{--
                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                            {{ $role->role_name }}
                        </option> --}}

                </select>
                @error('role_id') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="organization">Organization</label>
                <input type="text" name="organization" class="form-control" value="{{ $user->organization }}" required>
                @error('organization') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="zip_code">Zip Code</label>
                <input type="text" name="zip_code" class="form-control" value="{{ $user->zip_code }}" required>
                @error('zip_code') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>

        <!-- Submit and cancel Buttons -->
        <div class="mb-3 text-end">
            <a href="{{ url('users') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>
</div>

@endsection
