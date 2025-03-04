@extends("Layout.layouttwo")

@section("AdminContent")
<div class="container mt-4">
    <h1 style="font-size: 23px; font-weight:bolder;">Edit Web Development Record</h1>

    <form action="{{ route('Dashboard.admin.web_development.update', $webDevelopment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Row 1 -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control rounded-0 uniform-width" name="title" value="{{ old('title', $webDevelopment->title) }}" required />
                @error('title')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="descripation" class="form-label">Description</label>
                <textarea class="form-control rounded-0 uniform-width" name="descripation" rows="4" required>{{ old('descripation', $webDevelopment->descripation) }}</textarea>
                @error('descripation')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Row 3 - Image Upload -->
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="profile_img">Profile Image</label>
                <input type="file" name="profile_img" class="form-control" accept="image/*">
                @error('profile_img')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Show existing image -->
            <div class="col-md-3 mb-3">
                @if($webDevelopment->profile_img)
                    <label>Current Image</label>
                    <img src="{{ asset($webDevelopment->profile_img) }}" class="img-thumbnail" width="100" height="100">
                @else
                    <p>No Image Uploaded</p>
                @endif
            </div>
        </div>

        <!-- Submit and Cancel Buttons -->
        <div class="mb-3" style="display: flex; justify-content: flex-end; margin-top: 2vh">
            <a href="{{ url('web_development') }}" class="btn square-button" style="background-color:#6c757d;color:white;margin-right:10px;">Cancel</a>
            <button style="background-color:#b10937;color:white;" type="submit" class="btn square-button">Save Changes</button>
        </div>
    </form>
</div>

@endsection
