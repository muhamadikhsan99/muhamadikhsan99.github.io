<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #7b2ff7, #c471ed); /* Gradasi ungu */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            color: #fff;
            margin: 0;
        }
        .form-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 320px;
            text-align: center;
            animation: zoomIn 0.5s ease-out forwards;
            position: relative;
        }
        .form-container::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background: linear-gradient(135deg, #3498db, #9b59b6);
            border-radius: 12px;
            z-index: -1;
            animation: borderGlow 2s forwards;
        }
        .form-container h1 {
            font-weight: 700;
            color: #2c3e50;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        .form-label {
            font-size: 0.85rem;
            color: #34495e;
            font-weight: bold;
        }
        .form-control {
            font-size: 0.85rem;
            border-radius: 6px;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ddd;
        }
        .btn-primary {
            background: #3498db;
            border: none;
            border-radius: 20px;
            padding: 8px 15px;
            font-size: 0.85rem;
            color: #fff;
        }
        .btn-primary:hover {
            background: #2980b9;
        }
        .alert {
            margin-bottom: 10px;
            font-size: 0.8rem;
            color: #fff;
        }
        @keyframes zoomIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        @keyframes borderGlow {
            from { box-shadow: 0 0 10px rgba(52, 152, 219, 0.7); }
            to { box-shadow: 0 0 20px rgba(155, 89, 182, 0.7); }
        }
    </style>
</head>

<body>

<div class="form-container">
    <!-- Success/Error Messages -->
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

    <h1>Contact Details</h1>

    <!-- Name Field -->
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" value="{{ $contact->name }}" readonly>
    </div>

    <!-- Email Field -->
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" value="{{ $contact->email }}" readonly>
    </div>

    <!-- Phone Field -->
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" value="{{ $contact->phone ?? '-' }}" readonly>
    </div>

    <!-- Social Media Field -->
    <div class="mb-3">
        <label for="social_media" class="form-label">Social Media</label>
        <input type="text" class="form-control" id="social_media" value="{{ $contact->social_media ?? '-' }}" readonly>
    </div>

    <!-- Message Field -->
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" rows="3" readonly>{{ $contact->message }}</textarea>
    </div>

    <!-- Status (is_read) -->
    <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" id="is_read" {{ $contact->is_read ? 'checked' : '' }} disabled>
        <label class="form-check-label" for="is_read">Marked as Read</label>
    </div>

    <!-- Back Button -->
    <a href="{{ route('admin.contact.index') }}" class="btn btn-primary mt-3">Back to List</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
