<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-500 via-purple-600 to-pink-600 min-h-screen flex justify-center items-center">

    <div class="bg-gradient-to-br from-indigo-700 via-purple-700 to-pink-500 p-4 rounded-lg shadow-lg w-full max-w-sm animate__animated animate__fadeIn">
        <h2 class="text-white text-lg font-semibold text-center mb-4 tracking-wide font-ubuntu">Detail Project</h2>

        <div class="space-y-3 text-white text-sm">
            <!-- Nama Project -->
            <p class="font-semibold"><span class="text-indigo-200">Nama Project:</span> {{ $project->name }}</p>

            <!-- Deskripsi Project -->
            <p class="font-semibold"><span class="text-indigo-200">Deskripsi:</span> {{ $project->description }}</p>

            <!-- Tanggal Mulai -->
            <p class="font-semibold"><span class="text-indigo-200">Tanggal Mulai:</span> {{ \Carbon\Carbon::parse($project->start_date)->format('d M Y') }}</p>

            <!-- Tanggal Selesai -->
            <p class="font-semibold"><span class="text-indigo-200">Tanggal Selesai:</span> {{ $project->end_date ? \Carbon\Carbon::parse($project->end_date)->format('d M Y') : 'Tidak Ditentukan' }}</p>

            <!-- Status -->
            <p class="font-semibold"><span class="text-indigo-200">Status:</span> {{ ucfirst($project->status) }}</p>

            <!-- Jenis Project -->
            <p class="font-semibold"><span class="text-indigo-200">Jenis Project:</span> {{ ucfirst($project->type) }}</p>

            <!-- Gambar Project -->
            <div>
                <p class="font-semibold"><span class="text-indigo-200">Gambar Project:</span></p>
                @if($project->image)
                    <div class="mt-2 flex justify-center">
                        <img class="rounded-lg shadow-lg w-full max-w-[200px] border-4 border-indigo-300" src="{{ asset('storage/' . $project->image) }}" alt="Gambar Project">
                    </div>
                @else
                    <p class="text-gray-300 mt-2">Tidak ada gambar</p>
                @endif
            </div>

            <!-- File Preview -->
            <div>
                <p class="font-semibold"><span class="text-indigo-200">File:</span></p>
                @if($project->file)
                    @if(in_array(pathinfo($project->file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                        <div class="mt-2 flex justify-center">
                            <img class="rounded-lg shadow-lg w-full max-w-[200px] border-4 border-indigo-300" src="{{ asset('storage/' . $project->file) }}" alt="Sertifikat">
                        </div>
                    @elseif(in_array(pathinfo($project->file, PATHINFO_EXTENSION), ['pdf']))
                        <div class="mt-2 flex justify-center">
                            <iframe class="rounded-lg shadow-lg w-full max-w-[200px] h-28 border-4 border-indigo-300" src="{{ asset('storage/' . $project->file) }}" frameborder="0"></iframe>
                        </div>
                    @else
                        <a class="text-indigo-200 hover:text-white mt-2 block text-sm" href="{{ asset('storage/' . $project->file) }}" target="_blank">Lihat File</a>
                    @endif
                @else
                    <p class="text-gray-300 mt-2">Tidak ada file</p>
                @endif
            </div>
        </div>

        <!-- Tombol Kembali -->
        <div class="mt-4 text-center">
            <a href="{{ route('admin.project.index') }}" class="bg-indigo-600 text-white py-1.5 px-4 rounded-full text-sm hover:bg-indigo-700 transition duration-300 transform hover:scale-105 shadow-lg">Kembali</a>
        </div>
    </div>

</body>
</html>
