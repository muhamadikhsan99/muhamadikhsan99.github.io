<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #7a4dff 0%, #56ccf2 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            color: #fff;
        }
        .details-container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 8px;
            border-radius: 8px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
            width: 90%;
            max-width: 320px;
            display: flex;
            flex-direction: column;
            align-items: center;
            backdrop-filter: blur(6px);
            transition: all 0.3s ease;
        }
        .details-container:hover {
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.5);
        }
        .details-container h1 {
            font-weight: 600;
            color: #fff;
            margin-bottom: 8px;
            text-align: center;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .detail-item {
            font-weight: 400;
            margin-bottom: 4px;
            font-size: 0.75rem;
            color: #ddd;
            width: 100%;
        }
        .detail-item p {
            font-weight: 400;
            color: #f1f1f1;
            margin: 0;
            font-size: 0.75rem;
        }
        .btn-back, .btn-edit {
            background-color: #7a4dff;
            border: none;
            border-radius: 25px;
            padding: 8px 12px;
            font-size: 0.75rem;
            color: white;
            text-decoration: none;
            margin-top: 10px;
            width: 100%;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-back:hover, .btn-edit:hover {
            background-color: #56ccf2;
            transform: scale(1.05);
        }
        iframe {
            width: 100%;
            height: 80px;
            border: none;
            margin-top: 8px;
            border-radius: 4px;
        }
        .certificate-image {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
            margin-top: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }
        .alert {
            background-color: rgba(46, 204, 113, 0.8);
            color: #fff;
            padding: 4px;
            border-radius: 4px;
            font-size: 0.7rem;
            text-align: center;
            margin-bottom: 8px;
        }
        @media (max-width: 768px) {
            .details-container {
                width: 85%;
                padding: 8px;
            }
            .btn-back, .btn-edit {
                padding: 6px 10px;
                font-size: 0.7rem;
            }
        }
    </style>
</head>
<body>

<div class="details-container">
    <h1>Certificate Details</h1>

    <!-- Display Success Message -->
    @if (session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="detail-item">
        <p><strong>Certificate Name:</strong> {{ $certificate->name }}</p>
    </div>
    <div class="detail-item">
        <p><strong>Issued By:</strong> {{ $certificate->issued_by }}</p>
    </div>
    <div class="detail-item">
        <p><strong>Issued Date:</strong> {{ $certificate->issued_at ? $certificate->issued_at->format('d-m-Y') : 'Not Available' }}</p>
    </div>
    <div class="detail-item">
        <p><strong>Description:</strong> {{ $certificate->description }}</p>
    </div>

    @if($certificate->file)
    <div class="detail-item">
        <p><strong>Certificate File:</strong> 
            <a href="{{ asset('storage/' . $certificate->file) }}" target="_blank" style="color: #ff7f50;">Download</a>
        </p>
        <div class="file-preview">
            <strong>Preview:</strong>
            <iframe src="{{ asset('storage/' . $certificate->file) }}"></iframe>
        </div>
    </div>
    @endif

    @if($certificate->image)
    <div class="detail-item">
        <p><strong>Certificate Image:</strong></p>
        <img src="{{ asset('storage/' . $certificate->image) }}" alt="Certificate Image" class="certificate-image">
    </div>
    @endif

    <div class="d-flex flex-column w-100">
        <a href="{{ route('admin.certificate.index') }}" class="btn-back">Back</a>
        <a href="{{ route('admin.certificate.edit', $certificate->id) }}" class="btn-edit">Edit</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
