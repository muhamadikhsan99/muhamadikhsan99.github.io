<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Contact</title>
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
            background: linear-gradient(135deg, #6b7b8c, #ff7f50); /* Sama dengan latar belakang halaman */
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
            color: #fff; /* Mengubah warna teks menjadi putih agar kontras dengan latar belakang */
            font-size: 1.4rem;
            letter-spacing: 0.8px;
            margin-bottom: 10px;
        }

        .form-label {
            font-weight: bold;
            color: #fff; /* Mengubah warna label agar lebih terlihat */
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
            border: none;
            border-radius: 25px;
            padding: 6px 16px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-back:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }

        .btn-back:active {
            transform: translateY(0);
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(50px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .alert {
            margin-top: 8px;
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

    <!-- Contact Submission Form -->
    <h1>Submit Your Contact</h1>
    <form action="{{ route('admin.contact.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">
        </div>

        <div class="mb-3">
    <label for="social_media" class="form-label">Social Media (JSON format)</label>
    <input type="text" class="form-control" name="social_media" id="social_media" 
           placeholder='{"facebook": "https://facebook.com", "twitter": "https://twitter.com"}'
           aria-describedby="socialMediaHelp" required>

    <div id="socialMediaHelp" class="form-text">
        <strong>Contoh format JSON:</strong><br>
        <code>{"facebook": "https://facebook.com", "twitter": "https://twitter.com"}</code><br>
        Masukkan URL sosial media Anda dalam format JSON.
    </div>
</div>


        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
        </div>

        <!-- Status Checkbox (is_read) -->
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="is_read" id="is_read" value="1">
            <label class="form-check-label" for="is_read">Mark as Read</label>
        </div>

        <div class="btn-group">
            <!-- Tombol "Back" di kiri -->
            <a href="{{ route('admin.contact.index') }}" class="btn btn-back">Back</a>
            <!-- Tombol "Submit" di kanan -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
