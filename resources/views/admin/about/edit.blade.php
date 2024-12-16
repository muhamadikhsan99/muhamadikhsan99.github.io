<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('asset-landing-page-admin/css/editabout.css') }}" rel="stylesheet" />
    
      
  
</head>
<body>

<div class="form-container">
    <div class="form-header">
        <h2>Edit About</h2>
    </div>
    <form action="{{ route('admin.about.update', $about) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $about->title }}" required>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required>{{ $about->description }}</textarea>
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>

        <!-- Preview Current Image -->
        @if ($about->image)
            <div class="image-preview">
                <label>Current Image</label>
                <img src="{{ Storage::url($about->image) }}" alt="Current Image">
            </div>
        @else
            <p class="text-muted">No image available.</p>
        @endif

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update</button>

        <!-- Back Button -->
        <a href="{{ route('admin.about.index') }}" class="btn btn-secondary">Back to About</a>
    </form>
</div>

</body>
</html>
