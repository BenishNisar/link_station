@extends("Layout.layouttwo")
@section("AdminContent")
<div class="container mt-4">
    <h1 style="font-size: 23px; font-weight:bolder;">Role Management</h1>
    {{-- <a class="" href="{{ url('dashboard/admin/role_management/viewrecords') }}">view records</a> --}}

    <form action="{{ route('Dashboard.admin.roles.store') }}" method="POST">
        @csrf


        <!-- Row 1 -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="role_name" class="form-label">Role Name</label>
                <input type="text" class="form-control rounded-0 uniform-width" name="role_name" required />
                @error('role_name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Submit and cancel Buttons -->
        <div class="mb-3" style="display: flex; justify-content: flex-end; margin-top: 2vh">
            <a href="{{ url('dashboard/admin/role') }}" class="btn square-button" style="background-color:#6c757d;color:white;margin-right:10px;">Cancel</a>
            <button style="background-color:#b10937;color:white;" type="submit" class="btn square-button">Save</button>
        </div>
    </form>

</div>


@endsection
