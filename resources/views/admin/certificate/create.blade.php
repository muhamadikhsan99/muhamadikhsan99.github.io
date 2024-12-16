<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Certificate</title>
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
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }
        .form-container h1 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #ffffff;
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
            color: #ffffff;
        }
        .form-control {
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.8);
        }
        .form-control:focus {
            border-color: #ffffff;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
        }
        .btn-primary {
            background: linear-gradient(90deg, #3498db, #8e44ad);
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            color: #ffffff;
            font-size: 1rem;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #8e44ad, #3498db);
        }
        .alert {
            margin-bottom: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Submit Your Certificate</h1>

    <!-- Display Success/Error Messages -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Certificate Submission Form -->
    <form action="{{ route('admin.certificate.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Certificate Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="col-md-6">
                <label for="issued_by" class="form-label">Issued By</label>
                <input type="text" class="form-control" name="issued_by" id="issued_by" required>
            </div>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-6">
                <label for="issued_at" class="form-label">Issued Date</label>
                <input type="date" class="form-control" name="issued_at" id="issued_at" required>
            </div>
            <div class="col-md-6">
                <label for="type" class="form-label">Certificate Type</label>
                <select class="form-control" name="type" id="type" required>
                    <option value="achievement">Achievement</option>
                    <option value="participation">Participation</option>
                    <option value="completion">Completion</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>

        <div class="mt-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-6">
                <label for="file" class="form-label">Upload File</label>
                <input type="file" class="form-control" name="file" id="file" required>
            </div>
            <div class="col-md-6">
    <label for="image" class="form-label">Upload Image</label>
    <input type="file" class="form-control" name="image" id="image" accept="image/*,.svg">
</div>


        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
</div>

</body>
</html>
