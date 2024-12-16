<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tentang</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="{{ asset('asset-landing-page-admin/css/showabout.css') }}" rel="stylesheet" />
</head>
<body>
    <div class="card-container">
        <!-- Header -->
        <div class="card-header">
            Detail Tentang
        </div>
        <div class="card-body">
            <!-- Bagian Gambar -->
            <div class="image-section">
                @if($about->image)
                    <img src="{{ Storage::url($about->image) }}" alt="About Image">
                @else
                    <p class="text-muted">Gambar Tidak Tersedia</p>
                @endif
            </div>
            <!-- Bagian Detail -->
            <div class="detail-section">
                <p><strong>Judul:</strong> {{ $about->title ?? 'Tidak Ada Judul' }}</p>
                <p><strong>Deskripsi:</strong> {{ $about->description ?? 'Tidak Ada Deskripsi' }}</p>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.about.index') }}">Kembali</a>
        </div>
    </div>
</body>
</html>
