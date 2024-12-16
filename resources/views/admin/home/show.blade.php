<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="{{ asset('asset-landing-page-admin/css/showhome.css') }}" rel="stylesheet" />
   
</head>
<body>
    <div class="card-container">
        <div class="card-header">
            Detail Home
        </div>
        <div class="card-body">
            <div class="image-section">
                @if($home->image)
                    <img src="{{ asset('storage/' . $home->image) }}" alt="Home Image">
                @else
                    <p class="text-muted">No Image Available</p>
                @endif
            </div>
            <div class="detail-section">
                <p><strong>Judul:</strong> {{ $home->title }}</p>
                <p><strong>Deskripsi:</strong> {{ $home->description }}</p>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.home.index') }}">Kembali</a>
        </div>
    </div>
</body>
</html>
