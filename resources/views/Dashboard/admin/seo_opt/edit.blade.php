@extends("Layout.layouttwo")

@section("AdminContent")
<style>
    .form-control,
    .form-select {
        height: 42px; /* Slightly increased height */
        padding: 8px 14px; /* More comfortable padding */
        border: 1px solid #ccc;
        transition: border-color 0.3s ease-in-out;
        border-radius: 5px; /* Slightly rounded corners */
    }

    .form-label {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #b10937;
        box-shadow: none;
    }

    .textarea-large {
        height: 140px; /* Increased height for better usability */
        resize: vertical; /* Allow vertical resizing */
    }

    .img-preview {
        width: 120px; /* Increased size */
        height: 120px;
        border-radius: 8px;
        object-fit: cover; /* Ensure proper fit */
        border: 1px solid #ddd;
        padding: 3px;
    }

    .custom-btn {
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 6px;
    }

    .btn-danger {
        background-color: #b10937;
        border: none;
    }

    .btn-danger:hover {
        background-color: #8b072b;
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .form-container {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container mt-4">
    <div class="form-container">
        <h1 class="text-center" style="font-size: 23px; font-weight: bolder;">SEO</h1>

        <form action="{{ route('Dashboard.admin.seo_opt.update', $seoRecord->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title & Description -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title',$seoRecord->title) }}" required />
                    @error('title')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="descripation" class="form-label">Description</label>
                    <textarea name="descripation" class="form-control textarea-large" required>{{ old('descripation', $seoRecord->descripation) }}</textarea>
                    @error('descripation')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Image Upload & Preview -->
            <div class="row align-items-center">
                <div class="col-md-6 mb-3">
                    <label for="img">Upload New Image</label>
                    <input type="file" name="img" class="form-control" accept="image/*">
                    @error('img')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3 text-center">
                    <label>Current Image</label><br>
                    @if($seoRecord->img)
                        <img src="{{ asset($seoRecord->img) }}" class="img-preview">
                    @else
                        <p>No Image Uploaded</p>
                    @endif
                </div>
            </div>

            <!-- Submit and Cancel Buttons -->
            <div class="d-flex justify-content-end mt-3">
                <a href="{{ url('seo_opt') }}" class="btn btn-secondary custom-btn">Cancel</a>
                <button type="submit" class="btn btn-danger custom-btn ms-2">Save Changes</button>
            </div>
        </form>
    </div>
</div>

@endsection
