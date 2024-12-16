<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            padding: 15px 20px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 280px;
            max-width: 100%;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        h2 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            text-align: center;
            color: #fff;
        }

        label {
            font-weight: 600;
            color: #fff;
            margin-bottom: 4px;
            font-size: 0.8rem;
        }

        input[type="text"], textarea, input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            font-size: 0.8rem;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1);
        }

        textarea {
            resize: none;
            height: 60px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 8px;
            border: none;
            border-radius: 25px;
            width: 100%;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
            margin-bottom: 8px;
        }

        button:hover {
            background-color: #45a049;
        }

        .btn-back {
            background-color: #007bff;
            color: white;
            padding: 8px;
            border: none;
            border-radius: 25px;
            width: 100%;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }

        .image-preview {
            margin-bottom: 12px;
            text-align: center;
        }

        .image-preview img {
            max-width: 70px;
            border-radius: 6px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>

<form action="{{ route('admin.home.update', $home) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <h2>Edit Home</h2>

    <label for="title">Judul</label>
    <input type="text" id="title" name="title" value="{{ $home->title }}" required>

    <label for="description">Deskripsi</label>
    <textarea name="description" id="description" required>{{ $home->description }}</textarea>

    <div class="mb-3">
        <label for="image" class="form-label">Gambar</label>
        <!-- Atribut accept ditambahkan untuk mengizinkan format gambar tertentu -->
        <input type="file" class="form-control" name="image" id="image" accept=".jpeg,.jpg,.png,.gif,.svg">
    </div>

    @if ($home->image)
        <div class="image-preview">
            <label>Gambar Saat Ini</label><br>
            <img src="{{ Storage::url($home->image) }}" alt="Gambar Saat Ini">
        </div>
    @endif

    <button type="submit">Perbarui</button>
    
    <a href="{{ url()->previous() }}" class="btn btn-back">Kembali</a>

</form>

</body>
</html>
