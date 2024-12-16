<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('asset-landing-page-admin/css/createproject.css') }}" rel="stylesheet" />
</head>

<body>

    <div class="container mt-4">
        <h1 class="mb-4 text-center">Submit Project</h1>
        <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Project Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Project Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Start Date -->
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" name="start_date" id="start_date" value="{{ old('start_date') }}" required>
                @error('start_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- End Date -->
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" class="form-control" name="end_date" id="end_date" value="{{ old('end_date') }}">
                @error('end_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" name="status" id="status" required>
                    <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="in-progress" {{ old('status') == 'in-progress' ? 'selected' : '' }}>In Progress</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- File Upload -->
            <div class="mb-3">
                <label for="file" class="form-label">Upload File</label>
                <input type="file" class="form-control" name="file" id="file">
                @error('file')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Type -->
            <div class="mb-3">
                <label for="type" class="form-label">Project Type</label>
                <select class="form-control" name="type" id="type" required>
                    <option value="internal" {{ old('type') == 'internal' ? 'selected' : '' }}>Internal</option>
                    <option value="external" {{ old('type') == 'external' ? 'selected' : '' }}>External</option>
                    <option value="research" {{ old('type') == 'research' ? 'selected' : '' }}>Research</option>
                    <option value="development" {{ old('type') == 'development' ? 'selected' : '' }}>Development</option>
                </select>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
    <label for="image" class="form-label">Upload Image</label>
    <input type="file" class="form-control" name="image" id="image" accept="image/jpeg,image/png,image/jpg,image/gif,image/svg+xml">
    @error('image')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
