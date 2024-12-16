<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Keterampilan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #1a237e, #283593); /* Gradasi biru tua */
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #333;
    }

    .card-container {
        background-color: #ffffff;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        width: 80%;
        max-width: 800px;
        overflow: hidden;
        animation: fadeIn 1.5s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card-header {
        background: linear-gradient(45deg, #3f51b5, #1e88e5); /* Gradasi biru header */
        padding: 20px;
        color: white;
        text-align: center;
        font-size: 24px;
        font-weight: 600;
        letter-spacing: 1px;
        white-space: nowrap;
        overflow: hidden;
        border-right: 3px solid white;
        animation: typing 6s steps(40, end) infinite, blink 0.7s step-end infinite;
    }

    @keyframes typing {
        0% {
            width: 0;
        }
        85% {
            width: 100%;
        }
        100% {
            width: 100%;
        }
    }

    @keyframes blink {
        50% {
            border-color: transparent;
        }
    }

    .card-body {
        padding: 30px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .card-body .image-section {
        flex: 1;
        min-width: 250px;
        text-align: center;
        animation: fadeIn 1.8s ease-out;
    }

    .card-body img {
        width: 100%;
        max-width: 200px;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .card-body .detail-section {
        flex: 2;
        margin-left: 30px;
        animation: fadeInDetails 2s ease-in-out;
    }

    @keyframes fadeInDetails {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .card-body .detail-section p {
        margin: 10px 0;
        font-size: 16px;
        color: #555;
    }

    .card-footer {
        text-align: center;
        padding: 20px;
        background-color: #f9f9f9;
        border-top: 1px solid #ddd;
    }

    .card-footer a {
        text-decoration: none;
        color: #ffffff;
        background-color: #007bff;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        transition: background-color 0.3s ease-in-out;
    }

    .card-footer a:hover {
        background-color: #0056b3;
    }
</style>

</head>
<body>
    <div class="card-container">
        <!-- Animasi Mengetik -->
        <div class="card-header">
            Detail Keterampilan
        </div>
        <div class="card-body">
            <!-- Bagian Gambar -->
            <div class="image-section">
                @if($skill->image)
                    <img src="{{ asset('storage/' . $skill->image) }}" alt="Skill Image">
                @else
                    <p class="text-muted">No Image Available</p>
                @endif
            </div>
            <!-- Bagian Detail -->
            <div class="detail-section">
                <p><strong>Judul:</strong> {{ $skill->title }}</p>
                <p><strong>Deskripsi:</strong> {{ $skill->description }}</p>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('skill.index') }}">Kembali</a>
        </div>
    </div>
</body>
</html>
