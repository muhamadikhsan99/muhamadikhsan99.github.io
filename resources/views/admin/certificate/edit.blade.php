<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Certificate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #8e44ad, #3498db);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }
        .form-container {
            background: linear-gradient(120deg, rgba(142, 68, 173, 0.85), rgba(52, 152, 219, 0.85));
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }
        .form-container h2 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
            margin-bottom: 15px;
        }
        .form-label {
            font-weight: bold;
            color: #ffffff;
        }
        .form-control, .form-select {
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.8);
        }
        .form-control:focus, .form-select:focus {
            border-color: #ffffff;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
        }
        .btn-primary, .btn-secondary {
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        .btn-primary {
            background: linear-gradient(90deg, #3498db, #8e44ad);
            border: none;
            color: #ffffff;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #8e44ad, #3498db);
        }
        .btn-secondary {
            background-color: #ffffff;
            color: #3498db;
            border: 2px solid #3498db;
        }
        .btn-secondary:hover {
            background-color: #3498db;
            color: #ffffff;
        }
        .img-thumbnail {
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="form-container">
    <form action="{{ route('admin.certificate.update', $certificate->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h2>Edit Certificate</h2>

        <div class="row g-2">
            <div class="col-md-6">
                <label for="name" class="form-label">Certificate Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $certificate->name }}" required>
            </div>
            <div class="col-md-6">
                <label for="issued_by" class="form-label">Issued By</label>
                <input type="text" id="issued_by" name="issued_by" class="form-control" value="{{ $certificate->issued_by }}" required>
            </div>
        </div>

        <div class="row g-2 mt-2">
            <div class="col-md-6">
                <label for="issued_at" class="form-label">Issued Date</label>
                <input type="date" id="issued_at" name="issued_at" class="form-control" value="{{ $certificate->issued_at->format('Y-m-d') }}" required>
            </div>
            <div class="col-md-6">
                <label for="type" class="form-label">Certificate Type</label>
                <select id="type" name="type" class="form-select" required>
                    <option value="completion" {{ $certificate->type == 'completion' ? 'selected' : '' }}>Completion</option>
                    <option value="achievement" {{ $certificate->type == 'achievement' ? 'selected' : '' }}>Achievement</option>
                    <option value="participation" {{ $certificate->type == 'participation' ? 'selected' : '' }}>Participation</option>
                    <option value="other" {{ $certificate->type == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>
        </div>

        <div class="mt-2">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="2" required>{{ $certificate->description }}</textarea>
        </div>

        <div class="row g-2 mt-2">
            <div class="col-md-6">
                <label for="file" class="form-label">Certificate File (Optional)</label>
                <input type="file" id="file" name="file" class="form-control" accept=".pdf,.jpg,.png">
            </div>
            <div class="col-md-6">
    <label for="image" class="form-label">Certificate Image (Optional)</label>
    <input type="file" id="image" name="image" class="form-control" accept=".jpg,.png,.svg">
    @if (!empty($certificate->image))
        <div class="mt-2">
            <p>Current Image:</p>
            @if (str_ends_with($certificate->image, '.svg'))
                <!-- Jika gambar berupa SVG -->
                <img src="{{ asset('storage/' . $certificate->image) }}" alt="Certificate SVG" class="img-thumbnail" width="80" style="background-color: #f8f9fa; border: 1px solid #ddd;">
            @else
                <!-- Jika gambar bukan SVG -->
                <img src="{{ asset('storage/' . $certificate->image) }}" alt="Certificate Image" class="img-thumbnail" width="80">
            @endif
        </div>
    @endif
</div>


        <div class="d-flex justify-content-between mt-3">
            <button type="submit" class="btn btn-primary">Update Certificate</button>
            <a href="{{ route('admin.certificate.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
