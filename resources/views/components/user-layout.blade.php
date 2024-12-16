<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Title --}}
    <title>{{ $title ?? 'Portfolio Ican' }}</title>

    {{-- Arahkan ke file CSS di public/assets-landing-pages --}}
    <link rel="stylesheet" href="{{ asset('assets-landing-pages/css/style.css') }}">
</head>
<body class="h-full">
    <div class="min-h-full">
        <!-- Navbar -->
        <x-navbar-user />

        <!-- Header -->
        <header class="bg-blue-600 text-white py-4 shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold">{{ $header ?? 'Welcome to My Portfolio' }}</h1>
            </div>
        </header>

        <!-- Main Content -->
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

    {{-- Arahkan ke file JavaScript di public/assets-landing-pages --}}
    <script src="{{ asset('assets-landing-pages/js/script.js') }}"></script>
</body>
</html>
