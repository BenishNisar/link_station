@extends("Layout.layouttwo")
@section("AdminContent")
<div class="container mt-4">
    <h1 style="font-size: 23px; font-weight:bolder;">Office Details</h1>
    {{-- <a class="" href="{{ url('dashboard/admin/role_management/viewrecords') }}">view records</a> --}}

    <form action="{{ route('Dashboard.admin.officedetails.update', $office->id) }}" method="POST">

    @csrf
    @method('PUT')

        <!-- Row 1 -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="role_name" class="form-label">Location</label>
                <input type="text" class="form-control rounded-0 uniform-width" name="location" value="{{ $office->location }}" required />
                @error('location')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>




        <div class="col-md-4 mb-3">
            <label for="role_name" class="form-label">Contact</label>
            <input type="text" class="form-control rounded-0 uniform-width" name="contact" value="{{ $office->contact }}" required />

            @error('contact')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror

</div>

            <div class="col-md-4 mb-3">

                    <label for="role_name" class="form-label">Email</label>
                    <input type="text" class="form-control rounded-0 uniform-width" name="email" value="{{ $office->email }}" required />
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror

            </div>
                 <!-- Row 1 -->

                </div>

        <!-- Submit and cancel Buttons -->
        <div class="mb-3" style="display: flex; justify-content: flex-end; margin-top: 2vh">
            <a href="{{ url('officedetails') }}" class="btn square-button" style="background-color:#6c757d;color:white;margin-right:10px;">Cancel</a>
            <button style="background-color:#b10937;color:white;" type="submit" class="btn square-button">Save</button>
        </div>
    </form>

</div>


@endsection
