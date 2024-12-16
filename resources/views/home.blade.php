<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Portofolio - Ican</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0-alpha.4/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    


  

</head>
<body class="font-sans bg-gray-50 text-gray-800">

<!-- Navbar -->
<nav class="bg-gradient-to-r from-blue-700 via-purple-800 to-blue-900">
    <div class="container mx-auto flex flex-wrap items-center justify-between py-4 px-6">

      <!-- Tombol Hamburger dengan ukuran ikon lebih kecil -->
<button class="text-white text-xl md:hidden focus:outline-none mr-4 order-first" id="menu-button">
    <i class="fa-solid fa-bars-staggered"></i>
</button>

<!-- Logo "MyCans" dengan efek underline saat diklik -->
<a href="#" class="relative text-2xl sm:text-3xl font-extrabold tracking-wider text-white hover:opacity-100 hover:scale-110 transition-all duration-300 ease-in-out flex items-center space-x-4 order-last md:order-none group justify-start ml-[-20px]">
    <span class="relative inline-block w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-r from-purple-800 via-purple-600 to-purple-900 rounded-full shadow-xl transform group-hover:rotate-45 transition-transform duration-500 ease-out flex items-center justify-center">
        <span class="absolute inset-0 rounded-full bg-gradient-to-r from-purple-700 via-purple-500 to-purple-800 opacity-70 blur-lg animate-pulse"></span>
        <i class="fas fa-gem text-white text-2xl z-10"></i>
    </span>
    
    <span class="relative">
        <span class="text-2xl sm:text-3xl font-extrabold text-white drop-shadow-lg">
            My<span class="text-purple-300">Cans</span>
        </span>
        <!-- Efek underline saat diklik -->
        <span class="absolute -bottom-1 left-0 w-0 h-1 bg-gradient-to-r from-purple-800 via-purple-600 to-purple-900 transition-all duration-300 group-hover:w-full group-active:w-full"></span>
    </span>
</a>

        

        <!-- Navbar Links (tetap muncul di desktop) -->
<ul id="nav-links" class="hidden md:flex md:w-auto md:space-x-8 text-center font-sans text-lg lg:text-xl 2xl:text-2xl tracking-wide text-white">
    <li>
        <a href="#home" class="flex items-center group hover:text-yellow-300 transition-all duration-300 transform hover:scale-110">
            <div class="w-7 h-7 sm:w-8 sm:h-8 bg-blue-500 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-blue-400 hover:shadow-lg">
                <i class="fas fa-home text-base sm:text-lg"></i>
            </div>
            <span class="ml-2">Home</span>
        </a>
    </li>
    <li>
        <a href="#about" class="flex items-center group hover:text-yellow-300 transition-all duration-300 transform hover:scale-110">
            <div class="w-7 h-7 sm:w-8 sm:h-8 bg-green-500 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-green-400 hover:shadow-lg">
                <i class="fas fa-user text-base sm:text-lg"></i>
            </div>
            <span class="ml-2">About</span>
        </a>
    </li>
    <li>
        <a href="#certificate" class="flex items-center group hover:text-yellow-300 transition-all duration-300 transform hover:scale-110">
            <div class="w-7 h-7 sm:w-8 sm:h-8 bg-yellow-500 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-yellow-400 hover:shadow-lg">
                <i class="fas fa-award text-base sm:text-lg"></i>
            </div>
            <span class="ml-2">Certificate</span>
        </a>
    </li>
    <li>
        <a href="#projects" class="flex items-center group hover:text-yellow-300 transition-all duration-300 transform hover:scale-110">
            <div class="w-7 h-7 sm:w-8 sm:h-8 bg-purple-500 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-purple-400 hover:shadow-lg">
                <i class="fas fa-briefcase text-base sm:text-lg"></i>
            </div>
            <span class="ml-2">Project</span>
        </a>
    </li>
    <li>
        <a href="#skills" class="flex items-center group hover:text-yellow-300 transition-all duration-300 transform hover:scale-110">
            <div class="w-7 h-7 sm:w-8 sm:h-8 bg-orange-500 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-orange-400 hover:shadow-lg">
                <i class="fas fa-lightbulb text-base sm:text-lg"></i>
            </div>
            <span class="ml-2">Skill</span>
        </a>
    </li>
    <li>
        <a href="#contact" class="flex items-center group hover:text-yellow-300 transition-all duration-300 transform hover:scale-110">
            <div class="w-7 h-7 sm:w-8 sm:h-8 bg-red-500 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-red-400 hover:shadow-lg">
                <i class="fas fa-envelope text-base sm:text-lg"></i>
            </div>
            <span class="ml-2">Contact</span>
        </a>
    </li>
</ul>

<!-- Tombol Navigasi Pribadi (Mobile view, move this to last) -->
<div class="flex justify-center order-last md:order-none ml-1.5"> <!-- Margin kiri sedikit lebih besar -->
    <a href="#contact" class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm md:text-base lg:text-lg font-medium text-white hover:bg-gradient-to-r hover:from-purple-600 hover:to-red-600 transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-md">
        <i class="fas fa-envelope text-lg"></i>
        <span>Contact Me</span>
    </a>
</div>


  
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden bg-gradient-to-r from-purple-600 via-indigo-500 to-teal-500 md:hidden shadow-lg">
    <ul class="flex flex-col space-y-4 py-6 px-4 text-center">
        <li><a href="#home" class="flex items-center justify-center text-lg font-semibold text-white hover:text-yellow-300 transition-transform duration-300 transform hover:scale-105 hover:shadow-xl hover:bg-blue-500"><i class="fas fa-home mr-3 text-blue-400"></i>Home</a></li>
        <li><a href="#about" class="flex items-center justify-center text-lg font-semibold text-white hover:text-yellow-300 transition-transform duration-300 transform hover:scale-105 hover:shadow-xl hover:bg-green-500"><i class="fas fa-user mr-3 text-green-400"></i>About</a></li>
        <li><a href="#certificate" class="flex items-center justify-center text-lg font-semibold text-white hover:text-yellow-300 transition-transform duration-300 transform hover:scale-105 hover:shadow-xl hover:bg-yellow-500"><i class="fas fa-award mr-3 text-yellow-400"></i>Certificate</a></li>
        <li><a href="#projects" class="flex items-center justify-center text-lg font-semibold text-white hover:text-yellow-300 transition-transform duration-300 transform hover:scale-105 hover:shadow-xl hover:bg-purple-500"><i class="fas fa-briefcase mr-3 text-purple-400"></i>Project</a></li>
        <li><a href="#skills" class="flex items-center justify-center text-lg font-semibold text-white hover:text-yellow-300 transition-transform duration-300 transform hover:scale-105 hover:shadow-xl hover:bg-orange-500"><i class="fas fa-lightbulb mr-3 text-orange-400"></i>Skill</a></li>
        <li><a href="#contact" class="flex items-center justify-center text-lg font-semibold text-white hover:text-yellow-300 transition-transform duration-300 transform hover:scale-105 hover:shadow-xl hover:bg-red-500"><i class="fas fa-envelope mr-3 text-red-400"></i>Contact</a></li>
    </ul>
</div>

<script>
    // Toggle Mobile Menu
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</body>





<section id="home" class="relative bg-gradient-to-r from-blue-200 via-lavender-300 to-teal-200 pt-6">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-700 via-purple-800 to-blue-900"></div>
    <div class="container mx-auto text-center text-gray-100 relative z-10 flex flex-col justify-center items-center h-auto min-h-[60vh] px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12">
        @foreach ($home as $home)
        <div class="image-container mb-6 sm:mb-8 md:mb-10">
            @if ($home->image)
            <div class="relative w-32 h-32 sm:w-44 sm:h-44 md:w-56 md:h-56 lg:w-64 lg:h-64 xl:w-72 xl:h-72 mx-auto">
                <div class="absolute inset-0 bg-gradient-to-b from-teal-600 via-blue-500 to-teal-600 rounded-full opacity-90"></div>
                <img src="{{ asset('storage/' . $home->image) }}" 
                     alt="Home Image" 
                     class="relative w-full h-full object-cover rounded-full border-2 border-transparent bg-gradient-to-b from-teal-600 via-blue-500 to-teal-600 p-1 shadow-md transition-transform duration-500 ease-in-out 
                            hover:scale-110 hover:rotate-3 hover:shadow-[0_0_8px_#1e7d66,0_0_16px_#56c1b7,0_0_24px_#9fd8e2] 
                            active:scale-95 active:shadow-md">
            </div>
            @else
            <span class="block text-xs sm:text-sm md:text-base text-gray-300 italic">No Image</span>
            @endif
        </div>

        <div class="text-center mb-4 sm:mb-6 md:mb-8">
    <h1 id="typingText" class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold mb-2 text-transparent bg-clip-text bg-gradient-to-r from-teal-500 via-indigo-600 to-pink-600"
        style="text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.7), 1px 1px 0 rgba(255, 255, 255, 0.6);">
    </h1>
</div>


        <script>
            const text = "{{ $home->title }}";
            const typingTextElement = document.getElementById("typingText");
            let i = 0;
            function typeWriter() {
                if (i < text.length) {
                    typingTextElement.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, 100);
                }
            }
            window.onload = () => {
                typeWriter();
            };
        </script>

        <style>
            #typingText::after {
                content: "|";
                display: inline-block;
                animation: blink 1s infinite;
            }
            @keyframes blink {
                0%, 50% { opacity: 1; }
                51%, 100% { opacity: 0; }
            }
        </style>

<p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl mb-3 max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl mx-auto text-white font-bold tracking-tight"
    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);">
    {{ $home->description }}
</p>


        <a href="#projects" 
           class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-white py-2 px-4 sm:py-2 sm:px-6 md:py-2 md:px-8 lg:py-2 lg:px-10 xl:py-3 xl:px-12 rounded-full text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl font-semibold hover:scale-105 hover:bg-gradient-to-r hover:from-yellow-500 hover:to-yellow-700 transition-transform duration-300 shadow-lg">
            Lihat Project Saya
        </a>
        @endforeach
    </div>
</section>

<section class="relative bg-gradient-to-r from-blue-700 via-purple-800 to-blue-900 text-center text-white py-12 sm:py-14 md:py-16 lg:py-20 xl:py-24 shadow-xl">
    <!-- Ikon dekoratif di bagian atas -->
    <div class="flex justify-center mb-6 sm:mb-8 md:mb-10">
        <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 bg-gradient-to-r from-teal-300 to-blue-400 rounded-full shadow-lg flex items-center justify-center transform hover:scale-110 transition-transform duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10 md:h-12 md:w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6m3-15H9a2 2 0 00-2 2v18a2 2 0 002 2h6a2 2 0 002-2V3a2 2 0 00-2-2z" />
            </svg>
        </div>
    </div>

   <!-- Teks kutipan -->
<blockquote class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold italic mb-6 max-w-3xl mx-auto px-4 sm:px-6 md:px-8 lg:px-10">
    "Kreativitas tidak terbatas oleh apapun selain imajinasi dan keberanian kita."
</blockquote>


    <!-- Nama Penulis -->
    <span class="block text-blue-300 font-medium text-sm sm:text-base md:text-lg">– Ican</span>

    <!-- Garis dekoratif -->
    <div class="w-24 h-1 bg-blue-300 mx-auto mt-6 mb-10"></div>

    <!-- Tombol interaktif -->
    <div>
        <a href="#home" class="inline-block px-8 py-3 sm:px-10 sm:py-4 md:px-12 md:py-5 bg-gradient-to-r from-blue-500 to-teal-400 text-white font-medium text-sm sm:text-base md:text-lg rounded-full shadow-md hover:bg-blue-600 hover:shadow-lg transition-all duration-300 ease-in-out transform hover:scale-105">
            Explore me
        </a>
    </div>

    <ul class="flex justify-center space-x-6 py-6 mt-6 flex-wrap">
    <li>
        <a href="https://www.facebook.com/profile.php?id=100088473661582" class="flex items-center space-x-2 text-white transition-all duration-300 transform hover:scale-110 hover:text-blue-500">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-600 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-blue-500 hover:shadow-xl hover:scale-125">
                <i class="fab fa-facebook-f text-xl sm:text-2xl"></i>
            </div>
            <span class="text-lg sm:text-xl">Facebook</span>
        </a>
    </li>
    <li>
        <a href="https://www.instagram.com/sperrow_knight/" class="flex items-center space-x-2 text-white transition-all duration-300 transform hover:scale-110 hover:text-pink-400">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-pink-500 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-pink-400 hover:shadow-xl hover:scale-125">
                <i class="fab fa-instagram text-xl sm:text-2xl"></i>
            </div>
            <span class="text-lg sm:text-xl">Instagram</span>
        </a>
    </li>
    <li>
        <a href="https://github.com/muhamadikhsan99" class="flex items-center space-x-2 text-white transition-all duration-300 transform hover:scale-110 hover:text-gray-600">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gray-800 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-gray-700 hover:shadow-xl hover:scale-125">
                <i class="fab fa-github text-xl sm:text-2xl"></i>
            </div>
            <span class="text-lg sm:text-xl">GitHub</span>
        </a>
    </li>
    <li>
        <a href="https://www.youtube.com/@muhamadikhsan190" class="flex items-center space-x-2 text-white transition-all duration-300 transform hover:scale-110 hover:text-red-500">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-red-600 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-red-500 hover:shadow-xl hover:scale-125">
                <i class="fab fa-youtube text-xl sm:text-2xl"></i>
            </div>
            <span class="text-lg sm:text-xl">YouTube</span>
        </a>
    </li>
    <li>
        <a href="https://www.tiktok.com/@muhamadikhsan8913?lang=id-ID" class="flex items-center space-x-2 text-white transition-all duration-300 transform hover:scale-110 hover:text-black">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-black text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-gray-800 hover:shadow-xl hover:scale-125">
                <i class="fab fa-tiktok text-xl sm:text-2xl"></i>
            </div>
            <span class="text-lg sm:text-xl">TikTok</span>
        </a>
    </li>
    <li>
        <a href="https://x.com/ican30378" class="flex items-center space-x-2 text-white transition-all duration-300 transform hover:scale-110 hover:text-gray-800">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gray-800 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-black hover:shadow-xl hover:scale-125">
                <i class="fab fa-x text-xl sm:text-2xl"></i>
            </div>
            <span class="text-lg sm:text-xl">X</span>
        </a>
    </li>
</ul>

</section>










  <!-- About Section -->
<section id="about" class="py-16 bg-gradient-to-br from-indigo-600 via-purple-500 to-pink-500 text-white">
    <div class="container mx-auto text-center px-4">
        <!-- Heading -->
        @foreach($about as $about)
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 animate-continuous-scroll">
    {{ $about->title }}
</h2>

<style>
    @keyframes continuousScroll {
        0% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
        100% {
            transform: translateY(0);
        }
    }

    .animate-continuous-scroll {
        animation: continuousScroll 2s ease-in-out infinite;
    }
</style>
<p class="text-lg mb-12 max-w-3xl mx-auto px-4 fade-in-loop">
    {{ $about->description }}
</p>



<style>
@keyframes fadeInLoop {
    0% {
        opacity: 0;
        transform: translateY(10px);
    }
    40% {
        opacity: 1;
        transform: translateY(0);
    }
    60% {
        opacity: 1;
        transform: translateY(0); /* Menahan di posisi ini untuk memberi jeda */
    }
    100% {
        opacity: 0;
        transform: translateY(10px);
    }
}

.fade-in-loop {
    animation: fadeInLoop 15s ease-in-out infinite; /* Durasi 10 detik dengan animasi berulang */
}



</style>




<div class="grid grid-cols-1 sm:grid-cols-2 gap-12 items-center">
    <!-- Keahlian -->
    <div class="text-left space-y-6">
    <h3 class="text-4xl sm:text-5xl font-bold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 animate-bounce">
    Keahlian Saya
</h3>

        <ul class="mt-4 text-lg space-y-6">
            <li class="flex items-center space-x-4 transform hover:scale-105 transition-transform duration-300">
                <span class="bg-gradient-to-r from-blue-400 to-indigo-500 p-4 rounded-full shadow-lg">
                    <i class="fas fa-code text-2xl text-white"></i>
                </span>
                <span class="font-medium text-white">HTML5, CSS3, JavaScript</span>
            </li>
            <li class="flex items-center space-x-4 transform hover:scale-105 transition-transform duration-300">
                <span class="bg-gradient-to-r from-teal-400 to-green-500 p-4 rounded-full shadow-lg">
                    <i class="fas fa-code-branch text-2xl text-white"></i>
                </span>
                <span class="font-medium text-white">Tailwind CSS, Bootstrap</span>
            </li>
            <li class="flex items-center space-x-4 transform hover:scale-105 transition-transform duration-300">
                <span class="bg-gradient-to-r from-purple-500 to-pink-500 p-4 rounded-full shadow-lg">
                    <i class="fas fa-layer-group text-2xl text-white"></i>
                </span>
                <span class="font-medium text-white">Laravel, PHP</span>
            </li>
            <li class="flex items-center space-x-4 transform hover:scale-105 transition-transform duration-300">
                <span class="bg-gradient-to-r from-yellow-400 to-orange-500 p-4 rounded-full shadow-lg">
                    <i class="fas fa-database text-2xl text-white"></i>
                </span>
                <span class="font-medium text-white">MySQL</span>
            </li>
        </ul>
    </div>


            <!-- Gambar Profil -->
            <div class="relative group mx-auto w-64 sm:w-80 md:w-96 h-64 sm:h-80 md:h-96">
                <!-- Bingkai Gradien -->
                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 p-1 transition-transform duration-500 group-hover:scale-105">
                    <!-- Container Gambar -->
                    <div class="w-full h-full bg-white rounded-full p-1">
                        <!-- Gambar -->
                        <img src="{{ asset('storage/' . $about->image) }}" alt="Profile Picture"
                             class="w-full h-full object-cover rounded-full shadow-lg">
                    </div>
                </div>
                <!-- Nama dan Profesi di Overlay -->
                <div class="absolute inset-0 rounded-full bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-center items-center text-white">
                    <h3 class="text-2xl font-bold">Ican</h3>
                    <p class="text-sm mt-2">Front-End Developer</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section id="certificate" class="bg-gradient-to-r from-indigo-500 via-purple-600 to-pink-700 py-16">
    <div class="container mx-auto px-4 text-center">
        <!-- Judul bagian sertifikat -->
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-12 text-white drop-shadow-lg animate-continuous-scroll">
  Certificate Me
</h2>



        
        <!-- Jika tidak ada sertifikat -->
        @if($certificate->isEmpty())
            <p class="text-lg text-gray-200">Belum ada sertifikat yang ditampilkan.</p>
        @else
            <!-- Grid untuk menampilkan kartu sertifikat -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                @foreach ($certificate as $certificate)
                    <!-- Tentukan warna latar belakang berdasarkan kategori sertifikat -->
                    @php
                        $bgColor = match($certificate->type) {
                            'achievement' => 'from-indigo-500 via-purple-600 to-pink-600',  // Sertifikat prestasi
                            'participation' => 'from-teal-500 via-blue-600 to-green-500',  // Sertifikat partisipasi
                            'completion' => 'from-pink-500 via-red-600 to-yellow-500',     // Sertifikat penyelesaian
                            'other' => 'from-gray-500 via-gray-600 to-gray-700',            // Sertifikat lain-lain
                        };
                    @endphp

                    <!-- Kartu Sertifikat -->
                    <div class="certificate-card bg-gradient-to-r {{ $bgColor }} p-6 rounded-xl shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300">
                        <!-- Gambar sertifikat -->
                        <div class="relative h-64 w-full mb-4 overflow-hidden rounded-lg shadow-lg">
                            <img 
                                src="{{ $certificate->image_url ?? asset('default-image.jpg') }}" 
                                alt="{{ $certificate->name }}" 
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-110"
                            >
                        </div>

                        <div class="text-left">
                            <!-- Nama sertifikat -->
                            <h3 class="text-2xl font-bold text-white mb-2">{{ $certificate->name }}</h3>

                            <!-- Informasi penerbit -->
                            <p class="text-sm text-gray-200 mb-1">📜 <strong>Diberikan Oleh:</strong> {{ $certificate->issued_by }}</p>
                            <!-- Tanggal diterbitkan -->
                            <p class="text-sm text-gray-200 mb-1">📅 <strong>Tanggal:</strong> {{ $certificate->formatted_issued_at }}</p>
                            <!-- Jenis sertifikat -->
                            <p class="text-sm text-gray-200 mb-1">🏷️ <strong>Type Card:</strong> {{ ucfirst($certificate->type) }}</p>
                            <!-- Deskripsi sertifikat -->
                            <p class="text-sm text-gray-300 mt-3">{{ $certificate->description }}</p>
                        </div>

                        <!-- Tombol download sertifikat jika ada file -->
                        @if($certificate->file)
                        <a 
    href="{{ asset('storage/' . $certificate->file) }}" 
    target="_blank" 
    class="inline-block mt-4 text-center px-4 py-2 bg-pink-600 hover:bg-pink-700 text-white font-semibold rounded-lg shadow-md transition-all duration-300 transform hover:scale-105 hover:shadow-lg hover:ring-2 hover:ring-pink-400"
>
    Download Sertifikat PDF
</a>

                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>



<section id="projects" class="py-16 bg-gradient-to-r from-indigo-500 via-purple-600 to-pink-700">
    <div class="container mx-auto px-4 text-center text-white">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-8 text-white drop-shadow-lg animate-continuous-scroll">
  Project Me
</h2>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($project as $project)
                @php
                    // Menentukan bgColor berdasarkan type proyek
                    $bgColor = match($project->type) {
                        'internal' => 'from-indigo-500 via-purple-600 to-pink-600',  // Jenis Internal
                        'external' => 'from-teal-500 via-blue-600 to-green-500',    // Jenis External
                        'research' => 'from-pink-500 via-red-500 to-yellow-500',     // Jenis Research
                        'development' => 'from-purple-600 via-blue-600 to-indigo-600', // Jenis Development
                    };
                @endphp
                <div class="project-card bg-gradient-to-r {{ $bgColor }} p-4 sm:p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition-all duration-300">
                    <!-- Gambar Proyek -->
                    <img src="{{ $project->image ? asset('storage/'.$project->image) : asset('images/default.jpg') }}" 
                         alt="{{ $project->name ?? 'Nama Proyek Tidak Ada' }}" 
                         class="w-full h-40 sm:h-48 object-cover rounded-md mb-3 shadow-md transition-transform duration-500 ease-in-out hover:scale-110">
                    
                    <!-- Nama Proyek -->
                    <h3 class="text-lg sm:text-xl font-semibold mt-2">{{ $project->name ?? 'Nama Proyek Tidak Tersedia' }}</h3>
                    
                    <!-- Deskripsi Proyek -->
                    <p class="text-sm text-gray-200">{{ $project->description ?? 'Deskripsi proyek tidak tersedia.' }}</p>
                    
                    <!-- Tanggal Mulai dan Selesai -->
                    <p class="text-xs text-gray-300 mt-1">
                        {{ $project->start_date ? 'Mulai: '.date('d M Y', strtotime($project->start_date)) : 'Tanggal mulai tidak tersedia.' }}
                        <br>
                        {{ $project->end_date ? 'Selesai: '.date('d M Y', strtotime($project->end_date)) : 'Tanggal selesai tidak tersedia.' }}
                    </p>
                    
                    <!-- Status Proyek -->
                    <p class="text-sm text-yellow-300 mt-2">{{ $project->status ?? 'Status tidak tersedia.' }}</p>
                    
                    <!-- Jenis Proyek -->
                    <p class="text-xs text-gray-400">{{ $project->type ?? 'Jenis proyek tidak diketahui.' }}</p>
                    
                    <!-- Tautan Download -->
                    @if($project->file)
                    <a href="{{ asset('storage/'.$project->file) }}" 
   download 
   class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 text-white px-3 py-1.5 rounded-full shadow-md hover:shadow-lg transform transition-all duration-300 hover:scale-105 hover:from-red-500 hover:via-pink-500 hover:to-purple-500 mt-3 block text-center text-xs">
   Download PDF
</a>

                    @else
                        <p class="text-gray-400 mt-3 text-sm">File proyek tidak tersedia untuk diunduh.</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>






 <!-- Section Skills -->
 <section id="skills" class="py-16 bg-gradient-to-r from-purple-600 via-indigo-700 to-blue-800 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-purple-400 via-pink-500 to-purple-700 opacity-40 z-0"></div>
    <div class="container mx-auto px-4 text-white z-10 relative">
    <h2 class="text-5xl font-extrabold text-center mb-12 text-white drop-shadow-lg animate-continuous-scroll">
  Skills Me
</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach ($skill as $skill)
    <div class="bg-gradient-to-r 
        @switch($skill->type)
            @case('frontend')
                from-indigo-600 via-blue-500 to-purple-500
                @break
            @case('backend')
                from-green-500 via-teal-400 to-blue-500
                @break
            @case('design')
                from-yellow-500 via-orange-400 to-red-500
                @break
            @case('devops')
                from-pink-500 via-red-400 to-yellow-500
                @break
            @default
                from-purple-600 via-indigo-700 to-blue-800
        @endswitch
        shadow-2xl rounded-xl p-6 text-center transform hover:scale-105 hover:shadow-2xl transition-all duration-300 ease-in-out relative overflow-hidden group">
        
        <!-- Gambar Skill atau Ikon -->
        @if ($skill->image)
            <img src="{{ $skill->image_url }}" alt="{{ $skill->title }}" class="w-24 h-24 mb-4 mx-auto rounded-full transition-transform duration-300 ease-in-out group-hover:scale-110">
        @else
            <div class="text-6xl mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500">
                <i class="fab fa-html5"></i>
            </div>
        @endif

        <h3 class="text-3xl font-semibold mb-2 transition-transform duration-300 ease-in-out group-hover:text-yellow-400">{{ $skill->title }}</h3>
        <p class="text-lg mb-4">{{ $skill->description }}</p>

        <div class="absolute inset-0 border-4 border-transparent rounded-xl group-hover:border-yellow-400 transition-all duration-300"></div>
    </div>
@endforeach

        </div>
    </div>
</section>

<!-- Section Contact -->
<section id="contact" class="py-16 bg-gradient-to-r from-teal-500 via-blue-600 to-purple-700">
    <div class="container mx-auto px-6 text-center text-white">
    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold font-bold mb-6 text-white drop-shadow-lg animate-continuous-scroll">
  Contact Me
</h2>

        <p class="text-lg sm:text-xl text-center mt-4 mb-8 max-w-3xl mx-auto text-gray-100 animate__animated animate__fadeInUp">
            Saya siap membantu Anda! Silakan isi formulir di bawah ini atau hubungi saya melalui informasi kontak.
        </p>

        <style>
            @keyframes fadeInUp {
                0% {
                    opacity: 0;
                    transform: translateY(20px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate__animated.animate__fadeInUp {
                animation: fadeInUp 1s ease-out;
            }
        </style>

        <!-- Formulir Kontak -->
        <form id="contactForm" action="{{ route('admin.contact.store') }}" method="POST" class="contact-form bg-gradient-to-r from-purple-600 via-indigo-500 to-teal-400 p-6 sm:p-8 lg:p-10 rounded-xl shadow-lg max-w-3xl mx-auto space-y-6 hover:scale-105 transition-transform duration-300">
            @csrf <!-- CSRF token untuk keamanan -->

            <h2 class="text-2xl sm:text-3xl font-semibold text-white text-center mb-8">Hubungi Saya</h2>

            <!-- Nama -->
            <div class="flex flex-col mb-6">
                <label for="name" class="text-teal-800 font-bold text-sm mb-2">Nama Anda</label>
                <input type="text" name="name" id="name" placeholder="Nama Anda" required
                    class="w-full p-4 border-2 border-transparent rounded-lg focus:outline-none focus:ring-4 focus:ring-teal-500 focus:border-teal-500 transition-all duration-300 ease-in-out bg-white placeholder-gray-500 text-gray-900 shadow-md hover:bg-gray-50 animate__animated animate__fadeIn">
            </div>

            <!-- Email -->
            <div class="flex flex-col mb-6">
                <label for="email" class="text-teal-800 font-bold text-sm mb-2">Email Anda</label>
                <input type="email" name="email" id="email" placeholder="Email Anda" required
                    class="w-full p-4 border-2 border-transparent rounded-lg focus:outline-none focus:ring-4 focus:ring-teal-500 focus:border-teal-500 transition-all duration-300 ease-in-out bg-white placeholder-gray-500 text-gray-900 shadow-md hover:bg-gray-50 animate__animated animate__fadeIn">
            </div>

            <!-- Pesan -->
            <div class="flex flex-col mb-6">
                <label for="message" class="text-teal-800 font-bold text-sm mb-2">Pesan Anda</label>
                <textarea name="message" id="message" rows="5" placeholder="Pesan Anda" required
                    class="w-full p-4 border-2 border-transparent rounded-lg focus:outline-none focus:ring-4 focus:ring-teal-500 focus:border-teal-500 transition-all duration-300 ease-in-out bg-white placeholder-gray-500 text-gray-900 shadow-md hover:bg-gray-50 animate__animated animate__fadeIn"></textarea>
            </div>

            <!-- Nomor Telepon -->
            <div class="flex flex-col mb-6">
                <label for="phone" class="text-teal-800 font-bold text-sm mb-2">Nomor Telepon Anda</label>
                <input type="tel" name="phone" id="phone" placeholder="Nomor Telepon Anda" required
                    class="w-full p-4 border-2 border-transparent rounded-lg focus:outline-none focus:ring-4 focus:ring-teal-500 focus:border-teal-500 transition-all duration-300 ease-in-out bg-white placeholder-gray-500 text-gray-900 shadow-md hover:bg-gray-50 animate__animated animate__fadeIn">
            </div>

            <!-- Social Media -->
            <div class="flex flex-col mb-6 space-y-4">
                <label for="social_media" class="text-teal-800 font-semibold text-lg">Masukkan Akun Sosial Media Anda</label>
                <p class="text-sm text-gray-600">Gunakan format URL, contoh di bawah ini:</p>

                <input 
                    type="text" 
                    id="social_media" 
                    name="social_media" 
                    placeholder='{"instagram": "https://www.instagram.com/bot_account", "twitter": "https://twitter.com/bot_account"}' 
                    required
                    class="w-full p-4 border-2 border-teal-500 rounded-lg focus:outline-none focus:ring-4 focus:ring-teal-300 focus:border-teal-600 transition-all duration-300 ease-in-out bg-white placeholder-gray-500 text-gray-900 shadow-lg hover:bg-teal-50 text-sm md:text-base animate__animated animate__fadeIn"
                >

                <div class="bg-teal-100 p-4 rounded-lg border-l-4 border-teal-600 text-teal-700 font-medium text-sm md:text-base overflow-hidden break-words">
                    <strong>Contoh:</strong><br> {"instagram": "https://www.instagram.com/bot_account", "twitter": "https://twitter.com/bot_account"}
                </div>
            </div>

            <!-- Tombol Kirim -->
            <div class="relative group text-center">
                <button type="submit" 
                    class="w-full sm:w-auto bg-gradient-to-r from-yellow-400 to-pink-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-gradient-to-l from-pink-600 to-yellow-400 focus:outline-none focus:ring-4 focus:ring-teal-500 transition-all duration-300 ease-in-out transform hover:scale-105 animate__animated animate__pulse">
                    Kirim Pesan
                </button>
            </div>
        </form>

        <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
  



    <!-- Contact Information -->
<div class="mt-8 space-y-4">
    <!-- Contact Items Container -->
    <div class="flex items-center text-lg sm:text-xl text-gray-100">
        <!-- Phone Number -->
        <i class="fas fa-phone-alt text-xl bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 text-transparent bg-clip-text flex-shrink-0"></i>
        <span class="ml-3">+62 8989379116</span>
    </div>

    <div class="flex items-center text-lg sm:text-xl text-gray-100">
        <!-- Email Address -->
        <i class="fas fa-envelope text-xl bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 text-transparent bg-clip-text flex-shrink-0"></i>
        <span class="ml-3">hmzautocare99@gmail.com</span>
    </div>

    <div class="flex items-center text-lg sm:text-xl text-gray-100">
        <!-- Location -->
        <i class="fas fa-map-marker-alt text-xl bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 text-transparent bg-clip-text flex-shrink-0"></i>
    <span class="ml-3">Jl. Raya Ciomas, Gg. A. Yasin No. 85, Bogor, Jawa Barat</span>
    </div>
</div>


 <!-- Embedded Google Map -->
<div class="mt-8">
    <iframe class="w-full h-64 sm:h-80 lg:h-96 rounded-lg shadow-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3691470481804!2d106.76942461101085!3d-6.6009634933653265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5a76cda4bf5%3A0x7621d10be59ae0aa!2sGg.%20A.%20Yasin%2C%20Ciomas%20Rahayu%2C%20Kec.%20Ciomas%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016118!5e0!3m2!1sid!2sid!4v1733051332200!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </div>
    </div>
</section>

<!-- Meta CSRF -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('contactForm').addEventListener('submit', function (event) {
        event.preventDefault();

        const form = event.target;

        fetch(form.action, {
            method: form.method,
            body: new FormData(form),
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json()) // Parsing respon JSON
        .then(data => {
            if (data.success) {
                Swal.fire({
                    title: 'Pesan Terkirim!',
                    text: data.message,
                    imageUrl: "{{ asset('asset-landing-page/assets/massage.png') }}",
                    imageWidth: 150,
                    imageHeight: 150,
                    confirmButtonText: 'OK'
                });
                form.reset();
            } else {
                Swal.fire({
                    title: 'Oops!',
                    text: data.message || 'Terjadi kesalahan saat mengirim pesan.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        })
        .catch(() => {
            Swal.fire({
                title: 'Error!',
                text: 'Ada masalah jaringan. Silakan coba lagi.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
    });
</script>






<!-- Footer -->
<footer class="relative bg-gradient-to-r from-indigo-600 via-purple-700 to-pink-700 text-white py-12 overflow-hidden">
    <!-- Wave Effect -->
    <div class="absolute top-0 left-0 w-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#222222" fill-opacity="0.7" d="M0,96L60,101.3C120,107,240,117,360,122.7C480,128,600,128,720,144C840,160,960,192,1080,186.7C1200,181,1320,139,1380,117.3L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
        </svg>
    </div>
    <div class="container mx-auto px-6 relative">
        <!-- Konten lainnya di sini -->
    </div>

    <div class="container mx-auto px-6 relative">
        <!-- Title -->
        <div class="text-center mb-8">
            <h3 class="text-3xl font-bold uppercase tracking-wide text-shadow-lg">Terhubung dengan Saya</h3>
        </div>

 <!-- Social Media Icons dengan efek hover tajam -->
<div class="social-icons flex justify-center space-x-4 md:space-x-6 lg:space-x-8 mb-8">
   
   <a href="https://www.facebook.com/profile.php?id=100088473661582" target="_blank" class="text-2xl lg:text-3xl text-blue-600 transition-all duration-200 hover:text-blue-500 hover:scale-110 hover:rotate-12 hover:shadow-2xl relative">
       <div class="w-10 h-10 lg:w-12 lg:h-12 bg-blue-600 text-white rounded-full flex items-center justify-center transition-all duration-200 hover:bg-blue-500 hover:shadow-2xl hover:scale-125">
           <i class="fab fa-facebook-f text-lg lg:text-xl"></i>
       </div>
   </a>
   <a href="https://www.tiktok.com/@muhamadikhsan8913?lang=id-ID" target="_blank" class="text-2xl lg:text-3xl text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-pink-600 to-red-600 transition-all duration-200 hover:scale-110 hover:rotate-12 hover:shadow-2xl relative">
       <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gradient-to-r from-purple-600 via-pink-600 to-red-600 text-white rounded-full flex items-center justify-center transition-all duration-200 hover:bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 hover:shadow-2xl hover:scale-125">
           <i class="fab fa-tiktok text-lg lg:text-xl"></i>
       </div>
   </a>
   <a href="https://github.com/muhamadikhsan99" target="_blank" class="text-2xl lg:text-3xl text-gray-500 transition-all duration-200 hover:text-gray-400 hover:scale-110 hover:rotate-12 hover:shadow-2xl relative">
       <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gray-500 text-white rounded-full flex items-center justify-center transition-all duration-200 hover:bg-gray-400 hover:shadow-2xl hover:scale-125">
           <i class="fab fa-github text-lg lg:text-xl"></i>
       </div>
   </a>
   <a href="https://www.youtube.com/@muhamadikhsan190" target="_blank" class="text-2xl lg:text-3xl text-red-600 transition-all duration-200 hover:text-red-500 hover:scale-110 hover:rotate-12 hover:shadow-2xl relative">
       <div class="w-10 h-10 lg:w-12 lg:h-12 bg-red-600 text-white rounded-full flex items-center justify-center transition-all duration-200 hover:bg-red-500 hover:shadow-2xl hover:scale-125">
           <i class="fab fa-youtube text-lg lg:text-xl"></i>
       </div>
   </a>
   <a href="https://www.instagram.com/sperrow_knight/" target="_blank" class="text-2xl lg:text-3xl text-pink-500 transition-all duration-200 hover:text-pink-400 hover:scale-110 hover:rotate-12 hover:shadow-2xl relative">
       <div class="w-10 h-10 lg:w-12 lg:h-12 bg-pink-500 text-white rounded-full flex items-center justify-center transition-all duration-200 hover:bg-pink-400 hover:shadow-2xl hover:scale-125">
           <i class="fab fa-instagram text-lg lg:text-xl"></i>
       </div>
   </a>
   <a href="https://x.com/ican30378" target="_blank" class="text-2xl lg:text-3xl text-transparent bg-clip-text bg-gradient-to-r from-black via-gray-700 to-white hover:scale-110 hover:rotate-12 hover:shadow-2xl transition-all duration-200 relative">
       <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gradient-to-r from-black via-gray-700 to-white text-white rounded-full flex items-center justify-center transition-all duration-200 hover:bg-gradient-to-r from-black via-gray-600 to-white hover:shadow-2xl hover:scale-125">
           <i class="fab fa-x text-lg lg:text-xl"></i>
       </div>
   </a>
</div>


<!-- Personal Connect Section -->
<div class="personal-connect mb-8 text-center">
    <h4 class="text-3xl font-semibold mb-4 text-white">Berkoneksi Dengan Saya</h4>
    <p class="text-lg text-gray-300 mb-6">Saya sangat ingin mendengar ide dan masukan dari Anda. Jangan ragu untuk menghubungi saya atau berbagi pemikiran Anda!</p>
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
    <button type="button" onclick="location.href='#contact'" class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-6 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
    Kirim Pesan
</button>

<button type="button" onclick="location.href='#projects'" class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-6 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
    Lihat Proyek Saya
</button>

    </div>
    <div class="mt-6">
        <p class="text-md text-gray-400">Atau Anda bisa melihat lebih banyak tentang perjalanan saya dan proyek yang sedang saya kerjakan di bawah ini.</p>
    </div>
</div>


        <!-- Inspirational Quote -->
        <div class="quote text-center mb-8 text-lg italic tracking-wide text-shadow-lg">
            <p>"Kesuksesan dimulai dari langkah kecil yang konsisten setiap hari."</p>
        </div>

<!-- Navigation Links -->
<div class="footer-links grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4 text-center mb-8">
    <a href="#home" class="flex flex-col items-center text-white transition-all duration-300 group">
        <span class="relative inline-block p-3 rounded-full bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:scale-110 transition-all duration-300 shadow-xl group-hover:shadow-2xl">
            <i class="fas fa-home text-white mb-2 text-2xl"></i>
        </span>
        <span class="mt-2 text-lg font-semibold">Home</span>
    </a>
    <a href="#about" class="flex flex-col items-center text-white transition-all duration-300 group">
        <span class="relative inline-block p-3 rounded-full bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:scale-110 transition-all duration-300 shadow-xl group-hover:shadow-2xl">
            <i class="fas fa-user text-white mb-2 text-2xl"></i>
        </span>
        <span class="mt-2 text-lg font-semibold">About</span>
    </a>
    <a href="#certificate" class="flex flex-col items-center text-white transition-all duration-300 group">
        <span class="relative inline-block p-3 rounded-full bg-gradient-to-r from-yellow-500 via-yellow-600 to-yellow-700 hover:scale-110 transition-all duration-300 shadow-xl group-hover:shadow-2xl">
            <i class="fas fa-award text-white mb-2 text-2xl"></i>
        </span>
        <span class="mt-2 text-lg font-semibold">Certificate</span>
    </a>
    <a href="#projects" class="flex flex-col items-center text-white transition-all duration-300 group">
        <span class="relative inline-block p-3 rounded-full bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:scale-110 transition-all duration-300 shadow-xl group-hover:shadow-2xl">
            <i class="fas fa-briefcase text-white mb-2 text-2xl"></i>
        </span>
        <span class="mt-2 text-lg font-semibold">Project</span>
    </a>
    <a href="#skills" class="flex flex-col items-center text-white transition-all duration-300 group">
        <span class="relative inline-block p-3 rounded-full bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 hover:scale-110 transition-all duration-300 shadow-xl group-hover:shadow-2xl">
            <i class="fas fa-lightbulb text-white mb-2 text-2xl"></i>
        </span>
        <span class="mt-2 text-lg font-semibold">Skill</span>
    </a>
    <a href="#contact" class="flex flex-col items-center text-white transition-all duration-300 group">
        <span class="relative inline-block p-3 rounded-full bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:scale-110 transition-all duration-300 shadow-xl group-hover:shadow-2xl">
            <i class="fas fa-envelope text-white mb-2 text-2xl"></i>
        </span>
        <span class="mt-2 text-lg font-semibold">Contact</span>
    </a>
</div>



       <!-- Back to Top Button -->
<div class="back-to-top text-center">
    <a href="#home" class="inline-block bg-pink-500 hover:bg-pink-600 text-white py-2 px-6 rounded-full text-lg font-semibold transition-all duration-300 transform hover:scale-110 hover:rotate-12 hover:shadow-2xl">
        Kembali ke Atas
    </a>
</div>

        <!-- Footer Note -->
        <p class="text-center text-sm text-gray-200 mt-8">&copy; 2024 Ican | Semua hak cipta dilindungi</p>
    </div>
</footer>


