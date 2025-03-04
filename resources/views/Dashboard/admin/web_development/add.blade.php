@extends("Layout.layouttwo")
@section("AdminContent")
<div class="container mt-4">
    <h1 style="font-size: 23px; font-weight: bolder;">Web Development</h1>

    <form action="{{ route('Dashboard.admin.web_development.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Row 1: Title & Description Side by Side -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control rounded-3 shadow-sm" name="title" placeholder="Enter title" required />
                @error('title')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="descripation" class="form-label">Description</label>
                <input type="text" class="form-control rounded-3 shadow-sm" name="descripation" placeholder="Enter description" required />
                @error('descripation')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Row 2: Image Upload -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="img">Profile Image</label>
                <input type="file" name="img" class="form-control rounded-3 shadow-sm" accept="image/*">
                @error('img')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Submit and Cancel Buttons -->
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ url('web_development') }}" class="btn btn-secondary px-4 py-2 rounded-3 shadow-sm">Cancel</a>
            <button type="submit" class="btn btn-danger px-4 py-2 rounded-3 shadow-sm ms-2">Save</button>
        </div>
    </form>
</div>
@endsection
