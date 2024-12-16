<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Skill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('asset-landing-page-admin/css/createskill.css') }}" rel="stylesheet" />
   
</head>
<body>
<div class="container">
    <div class="form-container">
        <h1 class="mb-4">Submit Your Skill</h1>
        <form action="{{ route('skill.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Input Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter skill title" value="{{ old('title') }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="5" placeholder="Enter skill description" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

           <!-- Input Type (Optional) -->
<div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <select class="form-select" name="type" id="type">
        <option value="">Select Type</option>
        <option value="frontend" {{ old('type') == 'frontend' ? 'selected' : '' }}>Frontend</option>
        <option value="backend" {{ old('type') == 'backend' ? 'selected' : '' }}>Backend</option>
        <option value="design" {{ old('type') == 'design' ? 'selected' : '' }}>Design</option>
        <option value="devops" {{ old('type') == 'devops' ? 'selected' : '' }}>DevOps</option>
    </select>
    @error('type')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


            <!-- Input Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="image" accept=".jpeg,.jpg,.png,.gif,.svg">
                <small class="form-text text-muted">Allowed formats: JPEG, JPG, PNG, GIF, SVG (Max: 2MB)</small>
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit and Back Buttons -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('skill.index') }}" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
