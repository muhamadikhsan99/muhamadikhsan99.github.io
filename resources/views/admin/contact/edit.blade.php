<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6b7b8c, #ff7f50);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background: linear-gradient(145deg, #6b7b8c, #ff7f50); /* Warna gradien sesuai latar belakang */
            padding: 18px;
            border-radius: 8px;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 380px;
            text-align: center;
            animation: fadeInUp 0.6s ease-out;
        }
        .form-container h1 {
            font-family: 'Arial', sans-serif;
            font-weight: 600;
            color: #fff; /* Mengubah warna teks judul agar kontras */
            font-size: 1.4rem;
            letter-spacing: 0.8px;
            margin-bottom: 10px;
        }
        .form-label {
            font-weight: bold;
            color: #fff; /* Mengubah warna label agar kontras dengan latar belakang */
            font-size: 0.85rem;
        }
        .form-control, textarea {
            border-radius: 6px;
            font-size: 0.85rem;
            padding: 7px;
            margin-bottom: 8px;
            border: 1px solid #ddd;
            transition: border-color 0.3s ease;
        }
        .form-control:focus, textarea:focus {
            border-color: #ff7f50;
            outline: none;
        }
        .btn-primary {
            background-color: #ff7f50;
            border: none;
            border-radius: 25px;
            padding: 6px 16px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #ff4500;
            transform: translateY(-2px);
        }
        .btn-primary:active {
            transform: translateY(0);
        }

        .btn-back {
            background-color: #28a745;
            color: white;
            border-radius: 25px;
            padding: 6px 16px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-top: 10px;
            width: 100%;
        }

        .btn-back:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }

        .btn-back:active {
            transform: translateY(0);
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(50px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .alert {
            margin-top: 8px;
        }

        .form-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .form-buttons .btn {
            width: 48%;
        }
    </style>
</head>

<body>

<!-- Form Container -->
<div class="form-container">
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

    <!-- Contact Edit Form -->
    <h1>Edit Your Contact</h1> 
    <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Name Field -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $contact->name) }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email Field -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $contact->email) }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Phone Field -->
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $contact->phone) }}">
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Social Media Field -->
        <div class="mb-3">
            <label for="social_media" class="form-label">Social Media (JSON format)</label>
            <input type="text" class="form-control" name="social_media" id="social_media" value="{{ old('social_media', $contact->social_media) }}"
                   placeholder='{"facebook": "https://facebook.com", "twitter": "https://twitter.com"}'>
            @error('social_media')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="form-text">
                <strong>Example:</strong> {"facebook": "https://facebook.com", "twitter": "https://twitter.com"}
            </div>
        </div>

        <!-- Message Field -->
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="message" rows="3" required>{{ old('message', $contact->message) }}</textarea>
            @error('message')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Status Checkbox (is_read) -->
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="is_read" id="is_read" value="1" {{ $contact->is_read ? 'checked' : '' }}>
            <label class="form-check-label" for="is_read">Mark as Read</label>
        </div>

        <!-- Buttons Section with Flexbox -->
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
