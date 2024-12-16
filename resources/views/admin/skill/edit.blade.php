<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Skill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Background with modern gradient */
        body {
            background: linear-gradient(135deg, #6A1B9A, #FF6F61); /* Purple to Coral gradient */
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        /* Form Container Styling with same gradient as background */
        .form-container {
            background: linear-gradient(135deg, #6A1B9A, #FF6F61); /* Same gradient as body */
            border-radius: 12px;
            padding: 15px; /* Smaller padding */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px; /* Smaller width */
            transition: transform 0.3s ease-in-out;
        }

        .form-container:hover {
            transform: scale(1.05); /* Slight zoom effect for modern look */
        }

        h2 {
            text-align: center;
            font-weight: 600;
            color: white; /* White color for text */
            margin-bottom: 15px; /* Reduced margin */
            font-size: 1.25rem; /* Smaller font size */
        }

        label {
            font-weight: 500;
            color: #f5f5f5; /* Lighter color for label */
            font-size: 0.85rem; /* Smaller font size */
        }

        .form-control,
        .form-select {
            border-radius: 10px;
            font-size: 0.9rem; /* Smaller font size */
            padding: 10px; /* Reduced padding */
            border: 1px solid #ddd;
            transition: border 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #FF6F61; /* Coral highlight on focus */
            box-shadow: 0 0 5px rgba(255, 111, 97, 0.5);
        }

        /* Button Styles */
        .btn-primary {
            background-color: #FF6F61; /* Coral for primary button */
            border: none;
            color: white;
            transition: background-color 0.3s ease, transform 0.2s ease;
            font-size: 0.875rem; /* Smaller button text */
            padding: 10px 15px; /* Reduced padding */
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #FF9E86; /* Lighter coral on hover */
            transform: translateY(-2px);
        }

        .btn-success {
            background-color: #27AE60; /* Green button */
            border: none;
            color: white;
            transition: background-color 0.3s ease, transform 0.2s ease;
            font-size: 0.875rem; /* Smaller button text */
            padding: 10px 15px; /* Reduced padding */
            border-radius: 8px;
        }

        .btn-success:hover {
            background-color: #2ecc71; /* Lighter green on hover */
            transform: translateY(-2px);
        }

        .image-preview img {
            width: 100%;
            max-width: 150px; /* Smaller image preview */
            height: auto;
            border-radius: 8px;
            margin-top: 10px;
        }

        .form-text {
            font-size: 0.7rem;
            color: #ddd;
        }

        .row.mb-3 {
            margin-bottom: 15px; /* Reduced margin */
        }

        .col-3 {
            font-weight: bold;
            font-size: 0.85rem; /* Smaller font size for label */
            color: #f5f5f5;
        }

        .col-9 {
            font-size: 0.85rem; /* Smaller font size */
            color: #f5f5f5;
        }

        @media (max-width: 576px) {
            .form-container {
                padding: 10px; /* Further reduced padding on smaller screens */
            }

            .btn-primary,
            .btn-success {
                width: 100%;
                margin-top: 10px;
            }

            .form-control,
            .form-select {
                font-size: 0.85rem; /* Smaller font size */
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Edit Your Skill</h2>
        <form action="{{ route('skill.update', $skill) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <!-- Title -->
                <div class="col-3">
                    <label for="title" class="form-label">Title</label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $skill->title) }}"
                        placeholder="Enter skill title" required>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <!-- Description -->
                <div class="col-3">
                    <label for="description" class="form-label">Description</label>
                </div>
                <div class="col-9">
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter skill description" required>{{ old('description', $skill->description) }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <!-- Skill Type -->
                <div class="col-3">
                    <label for="type" class="form-label">Skill Type</label>
                </div>
                <div class="col-9">
                    <select class="form-select" name="type" id="type" required>
                        <option value="" disabled>-- Select Skill Type --</option>
                        @foreach ($types as $type)
                            <option value="{{ $type }}" @if ($skill->type === $type) selected @endif>{{ ucfirst($type) }}</option>
                        @endforeach
                    </select>
                    @error('type')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <!-- Upload Image -->
                <div class="col-3">
                    <label for="image" class="form-label">Upload New Image</label>
                </div>
                <div class="col-9">
                    <input type="file" class="form-control" name="image" id="image" accept=".jpeg,.jpg,.png,.gif,.svg">
                    <small class="form-text text-muted">Allowed formats: JPEG, JPG, PNG, GIF, SVG (Max: 2MB)</small>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Current Image -->
            @if ($skill->image)
                <div class="row mb-3">
                    <div class="col-3">
                        <label>Current Image</label>
                    </div>
                    <div class="col-9">
                        <div class="image-preview">
                            <img src="{{ asset('storage/' . $skill->image) }}" alt="Current Image" class="img-thumbnail">
                        </div>
                    </div>
                </div>
            @endif

            <!-- Buttons -->
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('skill.index') }}" class="btn btn-success w-45">Back</a>
                <button type="submit" class="btn btn-primary w-45">Update</button>
            </div>
        </form>
    </div>
</body>

</html>
