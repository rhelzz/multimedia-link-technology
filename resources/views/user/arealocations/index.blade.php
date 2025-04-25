<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Cabang - Multimedia Link Technology</title>
    
    <!-- External CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/home-user.css') }}">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#15008b',
                        primaryDark: '#0d0066',
                        blue: {
                            600: '#15008b',
                            700: '#0d0066'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .hero-gradient {
            background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(21,0,139,0.8));
        }
        .branch-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <x-navbar></x-navbar>
    <x-navbar-mobile></x-navbar-mobile>
    
    <!-- Hero Banner Section - Diperbesar -->
    <section class="relative bg-cover bg-center min-h-screen pt-16 md:pt-24 pb-12 md:pb-20 flex items-center" style="background-image: url('https://images.unsplash.com/photo-1521106047354-5a5b85e819ee?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
        <div class="hero-gradient absolute inset-0"></div>
        <div class="container mx-auto px-6 relative z-10 text-white">
            <div class="min-h-[calc(100vh-200px)] flex items-center">
                <div class="max-w-3xl space-y-5 md:space-y-6" data-aos="fade-up">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-tight tracking-tight">
                        Lokasi Cabang MLT
                        <span class="block mt-1 md:mt-2">Temukan Cabang Terdekat</span>
                    </h1>
                    <div class="space-y-3">
                        <p class="text-base sm:text-lg md:text-xl text-gray-100 leading-relaxed max-w-2xl">
                            Multimedia Link Technology hadir di berbagai wilayah untuk memberikan layanan internet fiber premium berkualitas tinggi yang lebih dekat dengan Anda.
                        </p>
                        <p class="inline-block px-4 py-2 bg-black/30 backdrop-blur-sm rounded-lg">
                            <span class="text-yellow-400 font-semibold text-base sm:text-lg md:text-xl">
                                Jangkauan Luas & Pelayanan Prima
                            </span>
                        </p>
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 pt-3">
                        <a href="#cabang-list" 
                        class="w-full sm:w-auto text-center bg-blue-600 hover:bg-blue-700 
                                px-6 py-2.5 sm:py-3 rounded-xl text-base font-semibold 
                                transition-all transform hover:scale-105
                                hover:shadow-lg shadow-md">
                            <i class="fas fa-map-marker-alt mr-2"></i> Lihat Semua Cabang
                        </a>
                    </div>
                    
                    <!-- Feature Tags -->
                    <div class="flex flex-wrap gap-3 pt-5 text-sm">
                        <span class="bg-white/10 backdrop-blur-sm px-3 py-1.5 rounded-full border border-white/20 flex items-center gap-2">
                            <i class="fas fa-check text-green-400"></i>
                            Jaringan Luas
                        </span>
                        <span class="bg-white/10 backdrop-blur-sm px-3 py-1.5 rounded-full border border-white/20 flex items-center gap-2">
                            <i class="fas fa-check text-green-400"></i>
                            Pelayanan 24/7
                        </span>
                        <span class="bg-white/10 backdrop-blur-sm px-3 py-1.5 rounded-full border border-white/20 flex items-center gap-2">
                            <i class="fas fa-check text-green-400"></i>
                            Support Teknis
                        </span>
                        <span class="bg-white/10 backdrop-blur-sm px-3 py-1.5 rounded-full border border-white/20 flex items-center gap-2">
                            <i class="fas fa-check text-green-400"></i>
                            Instalasi Cepat
                        </span>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16 md:py-20 bg-white" id="cabang-list">
        <div class="container mx-auto px-6">
            <div class="max-w-2xl mx-auto text-center mb-12" data-aos="fade-up">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider mb-2 block">Cabang Kami</span>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    Pilih Lokasi Cabang Terdekat
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Kami memiliki berbagai cabang untuk melayani Anda dengan lebih baik. Pilih cabang terdekat untuk mendapatkan informasi lengkap.
                </p>
            </div>

            <!-- Grid dengan lebih banyak kolom dan card yang lebih kecil -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 md:gap-5">
                @foreach($branches as $index => $branch)
                <div class="bg-white rounded-lg overflow-hidden shadow-md branch-card transition-all duration-300" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                    <div class="relative h-32 bg-primary overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-primary/90 flex items-end">
                            <div class="p-3 w-full">
                                <h3 class="text-md font-bold text-white mb-1">Cabang</h3>
                                <div class="flex items-center text-white/80 text-xs">
                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                    <span class="truncate">{{ $branch->name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-start mb-4">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <i class="fas fa-building text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm mb-0.5">Nama Cabang</h4>
                                <p class="text-gray-600 text-sm">{{ $branch->name }}</p>
                            </div>
                        </div>
                        
                        <a href="{{ route('arealocations.subbranches', $branch->id) }}" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-3 rounded-lg 
                            text-center text-sm flex items-center justify-center">
                            <i class="fas fa-info-circle mr-1.5"></i> Detail
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-lg font-semibold mb-4">Multimedia Link Technology</h4>
                    <p class="text-gray-400">
                        Penyedia layanan internet fiber premium dengan kualitas terbaik untuk rumah dan bisnis Anda.
                    </p>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>
                            <a href="#" class="hover:text-white transition-colors">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-colors">
                                Paket Internet
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-colors">
                                Area Coverage
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>
                            <a href="#" class="hover:text-white transition-colors">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-colors">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-colors">
                                Terms of Service
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-400 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-pink-600 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Multimedia Link Technology. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- AOS Animation Script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
            easing: 'ease-in-out'
        });
    </script>
</body>
</html>