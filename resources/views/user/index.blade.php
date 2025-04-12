<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DeltaNet - Internet Fiber Premium Indonesia</title>
        
        <!-- External CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        
        <!-- Custom Styles -->
        <style>
            /* Typography */
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
            
            html {
                scroll-behavior: smooth;
            }
            
            body {
                font-family: 'Inter', sans-serif;
            }
    
            /* Navbar Styles */
            .navbar-fixed {
                transition: all 0.3s ease;
            }

            .navbar-fixed.scrolled {
                background-color: white;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }

            .nav-link {
                transition: all 0.3s ease;
                position: relative;
                font-weight: 500;
            }
    
            /* Mobile Menu */
            .mobile-menu {
                transform: translateY(-100%);
                transition: all 0.3s ease;
            }
    
            .mobile-menu.show {
                transform: translateY(0);
            }
    
            @media (min-width: 768px) {
                .nav-link::after {
                    content: '';
                    position: absolute;
                    bottom: -2px;
                    left: 50%;
                    width: 0;
                    height: 2px;
                    background-color: currentColor;
                    transition: all 0.3s ease;
                    transform: translateX(-50%);
                }
    
                .nav-link:hover::after {
                    width: 100%;
                }
    
                .mobile-menu {
                    transform: none;
                }
            }

            /* Add to your existing styles section */
            @media (max-width: 768px) {
                body {
                    padding-bottom: 4rem; /* Add padding to account for bottom navigation */
                }
                
                /* Mobile menu transition */
                #mobileMenuOverlay > div {
                    transition: transform 0.3s ease-in-out;
                }
                
                /* Active state for bottom nav items */
                .bottom-nav-item.active {
                    color: #2563eb; /* blue-600 */
                }
            }
    
            /* Custom Styles */
            .hero-gradient {
                background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
            }
    
            .package-card {
                transition: all 0.3s ease;
            }
    
            .package-card:hover {
                transform: translateY(-5px);
            }

            /* Slider Styles */
            .slider-container {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .slide {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
                transition: opacity 1s ease-in-out;
                background-size: cover;
                background-position: center;
            }

            .slide.active {
                opacity: 1;
            }

            /* Slider Navigation */
            .slider-nav {
                position: absolute;
                bottom: 2rem;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
                gap: 0.35rem; /* Mengurangi gap antar dot */
                z-index: 20;
            }

            .slider-dot {
                width: 0.5rem; /* Mengecilkan ukuran dot dari 0.75rem */
                height: 0.5rem; /* Mengecilkan ukuran dot dari 0.75rem */
                border-radius: 50%;
                background-color: rgba(255, 255, 255, 0.3); /* Membuat inactive dot lebih transparan */
                cursor: pointer;
                transition: all 0.3s ease;
                border: 1px solid rgba(255, 255, 255, 0.5); /* Menambahkan border tipis */
            }

            .slider-dot.active {
                background-color: white;
                transform: scale(1.1); /* Mengurangi scale effect dari 1.2 */
                width: 1rem; /* Membuat dot aktif sedikit lebih panjang */
                border-radius: 4px; /* Membuat dot aktif sedikit rounded rectangle */
            }

            /* Hover effect untuk dot */
            .slider-dot:hover {
                background-color: rgba(255, 255, 255, 0.8);
            }
        </style>
    </head>
    <body class="bg-gray-50 text-gray-800">
        <!-- Navigation -->
        <header class="navbar-fixed fixed top-0 w-full z-50 hidden md:block" id="navbar">
            <!-- Add hidden md:block class to hide on mobile and show on desktop -->
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="https://placehold.co/40x40/0066ff/ffffff?text=M" 
                            alt="DeltaNet Logo" 
                            class="h-8 w-8 sm:h-10 sm:w-10 rounded-lg">
                        <span class="nav-brand text-xl sm:text-2xl font-bold text-white ml-3">
                            Multimedia Link Technology
                        </span>
                    </div>

                    <!-- Navigation Menu -->
                    <nav id="navMenu" class="hidden md:flex items-center">
                        <div class="flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0">
                            <div class="md:flex md:items-center md:space-x-5"> <!-- Mengubah space-x-8 menjadi space-x-5 -->
                                <a href="#promo" 
                                class="nav-link relative text-gray-800 md:text-white 
                                        hover:text-orange-500 transition-colors px-3 py-2"> <!-- Mengubah padding-x -->
                                    <i class="fas fa-tag mr-2"></i>Promo
                                </a>
                                <a href="#produk" 
                                class="nav-link relative text-gray-800 md:text-white 
                                        hover:text-orange-500 transition-colors px-3 py-2">
                                    <i class="fas fa-box mr-2"></i>Produk
                                </a>
                                <a href="#lokasi" 
                                class="nav-link relative text-gray-800 md:text-white 
                                        hover:text-orange-500 transition-colors px-3 py-2">
                                    <i class="fas fa-map-marker-alt mr-2"></i>Lokasi Area
                                </a>
                                <a href="#bantuan" 
                                class="nav-link relative text-gray-800 md:text-white 
                                        hover:text-orange-500 transition-colors px-3 py-2">
                                    <i class="fas fa-headset mr-2"></i>Bantuan & Dukungan
                                </a>
                                <a href="#konten" 
                                class="nav-link relative text-gray-800 md:text-white 
                                        hover:text-orange-500 transition-colors px-3 py-2">
                                    <i class="fa-solid fa-address-book mr-2"></i>Kontak
                                </a>
                                <a href="#member" 
                                class="bg-orange-500 text-white px-6 py-2 rounded-full 
                                        hover:bg-orange-600 transition-colors ml-3 inline-flex items-center">
                                    <!-- Mengubah padding dan margin -->
                                    <i class="fas fa-user mr-2"></i>My Member
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Mobile Navigation (Add this just after the header) -->
        <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-white shadow-[0_-2px_10px_rgba(0,0,0,0.1)] z-50">
            <div class="flex justify-around items-center p-4">
                <!-- Home -->
                <a href="#" class="flex flex-col items-center text-blue-600">
                    <i class="fas fa-home text-xl"></i>
                    <span class="text-xs mt-1">Home</span>
                </a>
                
                <!-- Paket -->
                <a href="#paket" class="flex flex-col items-center text-gray-600 hover:text-blue-600">
                    <i class="fas fa-box text-xl"></i>
                    <span class="text-xs mt-1">Paket</span>
                </a>
                
                <!-- Menu Button (Center) -->
                <button id="mobileMenuBtn" class="flex flex-col items-center -mt-8 relative">
                    <div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center shadow-lg text-white">
                        <i class="fas fa-bars text-xl"></i>
                    </div>
                    <span class="text-xs mt-1 text-gray-600">Menu</span>
                </button>
                
                <!-- Area -->
                <a href="#lokasi" class="flex flex-col items-center text-gray-600 hover:text-blue-600">
                    <i class="fas fa-map-marker-alt text-xl"></i>
                    <span class="text-xs mt-1">Area</span>
                </a>
                
                <!-- Contact -->
                <a href="#kontak" class="flex flex-col items-center text-gray-600 hover:text-blue-600">
                    <i class="fas fa-headset text-xl"></i>
                    <span class="text-xs mt-1">Kontak</span>
                </a>
            </div>
        </nav>

        <!-- Mobile Menu Overlay -->
        <div id="mobileMenuOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
            <div class="fixed bottom-24 left-4 right-4 bg-white rounded-xl shadow-xl p-4 transform transition-transform duration-300 translate-y-full">
                <div class="grid grid-cols-3 gap-4">
                    <!-- Menu Items -->
                    <a href="#promo" class="flex flex-col items-center p-4 text-gray-600 hover:text-blue-600">
                        <i class="fas fa-tag text-xl mb-2"></i>
                        <span class="text-sm">Promo</span>
                    </a>
                    <a href="#bantuan" class="flex flex-col items-center p-4 text-gray-600 hover:text-blue-600">
                        <i class="fas fa-question-circle text-xl mb-2"></i>
                        <span class="text-sm">Bantuan</span>
                    </a>
                    <a href="#member" class="flex flex-col items-center p-4 text-gray-600 hover:text-blue-600">
                        <i class="fas fa-user text-xl mb-2"></i>
                        <span class="text-sm">Member</span>
                    </a>
                    <a href="#faq" class="flex flex-col items-center p-4 text-gray-600 hover:text-blue-600">
                        <i class="fas fa-info-circle text-xl mb-2"></i>
                        <span class="text-sm">FAQ</span>
                    </a>
                    <a href="#privacy" class="flex flex-col items-center p-4 text-gray-600 hover:text-blue-600">
                        <i class="fas fa-shield-alt text-xl mb-2"></i>
                        <span class="text-sm">Privacy</span>
                    </a>
                    <a href="#terms" class="flex flex-col items-center p-4 text-gray-600 hover:text-blue-600">
                        <i class="fas fa-file-contract text-xl mb-2"></i>
                        <span class="text-sm">Terms</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Hero Section -->
        <section class="min-h-screen pt-16 md:pt-24 pb-12 md:pb-20 bg-cover bg-center relative">
            <!-- Slider Container (tetap sama) -->
            <div class="slider-container" id="heroSlider">
                <div class="slide active" 
                    style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1920&auto=format&fit=crop')">
                </div>
                <div class="slide" 
                    style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=1920&auto=format&fit=crop')">
                </div>
                <div class="slide" 
                    style="background-image: url('https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?q=80&w=1920&auto=format&fit=crop')">
                </div>
            </div>
            
            <!-- Slider Navigation (tetap sama) -->
            <div class="slider-nav">
                <div class="slider-dot active" data-slide="0"></div>
                <div class="slider-dot" data-slide="1"></div>
                <div class="slider-dot" data-slide="2"></div>
            </div>

            <div class="hero-gradient absolute inset-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-white">
                <div class="min-h-[calc(100vh-200px)] flex items-center md:pl-10">
                    <div class="max-w-3xl text-left space-y-5 md:space-y-6"> <!-- Mengurangi space-y -->
                        <!-- Hero Title -->
                        <h1 class="text-2xl sm:text-3xl md:text-3xl lg:text-4xl font-bold leading-tight tracking-tight"> <!-- Mengurangi ukuran font untuk desktop -->
                            Internet Fiber Premium 
                            <span class="block mt-1 md:mt-2">untuk Kebutuhan Digital Anda</span> <!-- Mengurangi margin top -->
                        </h1>
                        
                        <!-- Hero Description -->
                        <div class="space-y-3"> <!-- Mengurangi space-y -->
                            <p class="text-base sm:text-lg md:text-lg text-gray-100 leading-relaxed max-w-2xl"> <!-- Menambah max-width dan mengurangi ukuran font -->
                                Nikmati kecepatan hingga 100 Mbps dengan stabilitas tinggi
                            </p>
                            <p class="inline-block px-4 py-2 bg-black/30 backdrop-blur-sm rounded-lg">
                                <span class="text-yellow-400 font-semibold text-base sm:text-lg md:text-xl"> <!-- Mengurangi ukuran font -->
                                    Mulai dari Rp199.000/bulan
                                </span>
                            </p>
                        </div>
                        
                        <!-- CTA Buttons -->
                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 pt-3"> <!-- Mengurangi gap dan padding -->
                            <a href="#paket" 
                            class="w-full sm:w-auto text-center bg-blue-600 hover:bg-blue-700 
                                    px-6 py-2.5 sm:py-3 rounded-xl text-base font-semibold 
                                    transition-all transform hover:scale-105
                                    hover:shadow-lg shadow-md">
                                <i class="fas fa-rocket mr-2"></i> Pilih Paket
                            </a>
                            <a href="#cek-area" 
                            class="w-full sm:w-auto text-center border-2 border-white/80 
                                    px-6 py-2.5 sm:py-3 rounded-xl text-base
                                    font-semibold hover:bg-white hover:text-blue-600 
                                    transition-all hover:shadow-lg shadow-md
                                    bg-white/10 backdrop-blur-sm">
                                <i class="fas fa-map-marker-alt mr-2"></i> Cek Ketersediaan
                            </a>
                        </div>
                        
                        <!-- Feature Tags -->
                        <div class="flex flex-wrap gap-3 pt-5 text-sm"> <!-- Mengurangi gap dan padding -->
                            <span class="bg-white/10 backdrop-blur-sm px-3 py-1.5 rounded-full 
                                    border border-white/20 flex items-center gap-2">
                                <i class="fas fa-check text-green-400"></i>
                                Instalasi Cepat 24 Jam
                            </span>
                            <span class="bg-white/10 backdrop-blur-sm px-3 py-1.5 rounded-full 
                                    border border-white/20 flex items-center gap-2">
                                <i class="fas fa-check text-green-400"></i>
                                Gratis Biaya Admin
                            </span>
                            <span class="bg-white/10 backdrop-blur-sm px-3 py-1.5 rounded-full 
                                    border border-white/20 flex items-center gap-2">
                                <i class="fas fa-check text-green-400"></i>
                                Free Setup Modem WiFi
                            </span>
                        </div>

                        <!-- Trust Indicators -->
                        <div class="pt-6 flex flex-wrap gap-5 items-center text-sm"> <!-- Mengurangi padding dan ukuran font -->
                            <div class="flex items-center gap-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span>4.9/5 Rating Pelanggan</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-users text-blue-400"></i>
                                <span>10.000+ Pelanggan Aktif</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-shield-alt text-green-400"></i>
                                <span>Jaminan Uang Kembali</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-12 md:py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                    <!-- Feature Card 1 -->
                    <div class="text-center p-6 hover:transform hover:scale-105 transition-all">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center 
                                  justify-center mx-auto mb-4">
                            <i class="fas fa-bolt text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Ultra Fast</h3>
                        <p class="text-gray-600">Kecepatan download hingga 100 Mbps</p>
                    </div>

                    <!-- Feature Card 2 -->
                    <div class="text-center p-6 hover:transform hover:scale-105 transition-all">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center 
                                  justify-center mx-auto mb-4">
                            <i class="fas fa-wifi text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Stable Connection</h3>
                        <p class="text-gray-600">Koneksi stabil 24/7 dengan uptime 99.9%</p>
                    </div>

                    <!-- Feature Card 3 -->
                    <div class="text-center p-6 hover:transform hover:scale-105 transition-all">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center 
                                  justify-center mx-auto mb-4">
                            <i class="fas fa-headset text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">24/7 Support</h3>
                        <p class="text-gray-600">Layanan pelanggan siap membantu</p>
                    </div>

                    <!-- Feature Card 4 -->
                    <div class="text-center p-6 hover:transform hover:scale-105 transition-all">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center 
                                  justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Security First</h3>
                        <p class="text-gray-600">Dilengkapi dengan keamanan premium</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Packages Section -->
        <section id="paket" class="py-16 md:py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-4">
                    Pilihan Paket Internet
                </h2>
                <p class="text-center text-gray-600 mb-12">
                    Temukan paket yang sesuai dengan kebutuhan Anda
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <!-- Basic Package -->
                    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 package-card 
                              transition-all">
                        <div class="text-center mb-6">
                            <span class="text-blue-600 font-semibold">BASIC</span>
                            <h3 class="text-2xl md:text-3xl font-bold mt-2">Elite 20</h3>
                            <div class="mt-4">
                                <span class="text-3xl md:text-4xl font-bold">Rp199.000</span>
                                <span class="text-gray-500">/bulan</span>
                            </div>
                        </div>
                        
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Kecepatan hingga 20 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Unlimited Kuota</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Free Modem WiFi</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-circle-xmark text-red-500 mr-2"></i>
                                <span>Prioritas Support</span>
                            </li>
                        </ul>
                        
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg 
                                     hover:bg-blue-700 transition-colors">
                            Pilih Paket
                        </button>
                    </div>

                    <!-- Gold Package -->
                    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 transform scale-105 
                              border-2 border-blue-500 package-card transition-all relative">
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-blue-600 text-white px-4 py-1 rounded-full text-sm">
                                MOST POPULAR
                            </span>
                        </div>
                        
                        <div class="text-center mb-6">
                            <span class="text-blue-600 font-semibold">GOLD</span>
                            <h3 class="text-2xl md:text-3xl font-bold mt-2">Gold 50</h3>
                            <div class="mt-4">
                                <span class="text-3xl md:text-4xl font-bold">Rp299.000</span>
                                <span class="text-gray-500">/bulan</span>
                            </div>
                        </div>
                        
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Kecepatan hingga 50 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Unlimited Kuota</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Free Premium Modem</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Prioritas Support</span>
                            </li>
                        </ul>
                        
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg 
                                     hover:bg-blue-700 transition-colors">
                            Pilih Paket
                        </button>
                    </div>

                    <!-- Turbo Package -->
                    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 package-card 
                              transition-all">
                        <div class="text-center mb-6">
                            <span class="text-blue-600 font-semibold">TURBO</span>
                            <h3 class="text-2xl md:text-3xl font-bold mt-2">Turbo 100</h3>
                            <div class="mt-4">
                                <span class="text-3xl md:text-4xl font-bold">Rp399.000</span>
                                <span class="text-gray-500">/bulan</span>
                            </div>
                        </div>
                        
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Kecepatan hingga 100 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Unlimited Kuota</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Gaming Router</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>24/7 Premium Support</span>
                            </li>
                        </ul>
                        
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg 
                                     hover:bg-blue-700 transition-colors">
                            Pilih Paket
                        </button>
                    </div>

                    <!-- Premium Package -->
                    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 package-card transition-all">
                        <div class="text-center mb-6">
                            <span class="text-blue-600 font-semibold">PREMIUM</span>
                            <h3 class="text-2xl md:text-3xl font-bold mt-2">Premium 200</h3>
                            <div class="mt-4">
                                <span class="text-3xl md:text-4xl font-bold">Rp599.000</span>
                                <span class="text-gray-500">/bulan</span>
                            </div>
                        </div>
                        
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Kecepatan hingga 200 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Unlimited Kuota</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Enterprise Router</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Dedicated Premium Support</span>
                            </li>
                        </ul>
                        
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition-colors">
                            Pilih Paket
                        </button>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="kontak" class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                    <!-- Contact Info -->
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold mb-6">Hubungi Kami</h2>
                        <p class="text-gray-600 mb-8">
                            Punya pertanyaan? Tim kami siap membantu Anda 24/7. Silakan hubungi 
                            kami melalui form di samping atau gunakan channel komunikasi di 
                            bawah ini.
                        </p>
                        
                        <div class="space-y-4">
                            <!-- Phone -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center 
                                          justify-center mr-4">
                                    <i class="fas fa-phone text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Telepon</h3>
                                    <p class="text-gray-600">0800-1234-5678</p>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center 
                                          justify-center mr-4">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Email</h3>
                                    <p class="text-gray-600">support@deltanet.id</p>
                                </div>
                            </div>
                            
                            <!-- Address -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center 
                                          justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Alamat</h3>
                                    <p class="text-gray-600">Jl. Internet Cepat No. 88, Jakarta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div>
                        <form class="bg-gray-50 p-6 md:p-8 rounded-xl shadow-lg">
                            <div class="space-y-6">
                                <!-- Name Field -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Nama Lengkap
                                    </label>
                                    <input type="text" 
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 
                                                  focus:ring-2 focus:ring-blue-600 
                                                  focus:border-transparent transition-all"
                                           placeholder="Masukkan nama lengkap Anda">
                                </div>
                                
                                <!-- Email Field -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Email
                                    </label>
                                    <input type="email" 
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 
                                                  focus:ring-2 focus:ring-blue-600 
                                                  focus:border-transparent transition-all"
                                           placeholder="email@example.com">
                                </div>
                                
                                <!-- Phone Field -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Nomor Telepon
                                    </label>
                                    <input type="tel" 
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 
                                                  focus:ring-2 focus:ring-blue-600 
                                                  focus:border-transparent transition-all"
                                           placeholder="08xxxxxxxxxx">
                                </div>
                                
                                <!-- Message Field -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Pesan
                                    </label>
                                    <textarea 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 
                                               focus:ring-2 focus:ring-blue-600 
                                               focus:border-transparent transition-all"
                                        rows="4"
                                        placeholder="Tuliskan pesan Anda di sini...">
                                    </textarea>
                                </div>
                                
                                <!-- Submit Button -->
                                <button type="submit" 
                                        class="w-full bg-blue-600 text-white py-3 rounded-lg 
                                               hover:bg-blue-700 transition-colors">
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="container mx-auto px-4">
                <!-- Footer Content Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                        <img src="https://placehold.co/120x40/0066ff/ffffff?text=DeltaNet" 
                             alt="DeltaNet Logo" 
                             class="mb-4">
                        <p class="text-gray-400">
                            Penyedia layanan internet fiber premium dengan kualitas terbaik 
                            untuk rumah dan bisnis Anda.
                        </p>
                    </div>
                    
                    <!-- Quick Links -->
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
                            <li>
                                <a href="#" class="hover:text-white transition-colors">
                                    Support
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Support Links -->
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
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition-colors">
                                    Terms of Service
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Social Media -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" 
                               class="w-10 h-10 bg-gray-800 rounded-full flex items-center 
                                      justify-center hover:bg-blue-600 transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" 
                               class="w-10 h-10 bg-gray-800 rounded-full flex items-center 
                                      justify-center hover:bg-blue-400 transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" 
                               class="w-10 h-10 bg-gray-800 rounded-full flex items-center 
                                      justify-center hover:bg-pink-600 transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" 
                               class="w-10 h-10 bg-gray-800 rounded-full flex items-center 
                                      justify-center hover:bg-blue-700 transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Copyright -->
                <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                    <p>&copy; 2025 DeltaNet. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <!-- Mobile Menu Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const navbar = document.getElementById('navbar');
                const heroSection = document.querySelector('section');
                const memberButton = document.querySelector('a[href="#member"]');
                
                // Handle scroll untuk navbar desktop
                function handleScroll() {
                    const heroHeight = heroSection.offsetHeight;
                    const scrollPosition = window.pageYOffset;
                    const threshold = heroHeight * 0.125;

                    if (scrollPosition > threshold) {
                        navbar.classList.add('scrolled');
                        // Ubah warna nav links
                        document.querySelectorAll('.nav-link').forEach(link => {
                            link.classList.remove('md:text-white', 'text-gray-800');
                            link.classList.add('text-blue-600');
                            link.style.color = '#2563eb';
                        });
                        // Ubah warna brand
                        document.querySelector('.nav-brand').classList.remove('text-white');
                        document.querySelector('.nav-brand').classList.add('text-blue-600');
                        
                        // Ubah warna member area button
                        memberButton.classList.remove('bg-orange-500', 'hover:bg-orange-600');
                        memberButton.classList.add('bg-blue-600', 'hover:bg-blue-700');
                    } else {
                        navbar.classList.remove('scrolled');
                        // Kembalikan warna nav links
                        document.querySelectorAll('.nav-link').forEach(link => {
                            link.classList.add('md:text-white');
                            link.classList.remove('text-blue-600');
                            link.style.removeProperty('color');
                        });
                        // Kembalikan warna brand
                        document.querySelector('.nav-brand').classList.add('text-white');
                        document.querySelector('.nav-brand').classList.remove('text-blue-600');
                        
                        // Kembalikan warna member area button
                        memberButton.classList.add('bg-orange-500', 'hover:bg-orange-600');
                        memberButton.classList.remove('bg-blue-600', 'hover:bg-blue-700');
                    }
                }

                // Listen for scroll and resize events
                window.addEventListener('scroll', handleScroll);
                window.addEventListener('resize', handleScroll);
                
                // Initial check
                handleScroll();
            });
        </script>
        <script>
            // Mobile Bottom Navigation Menu Handler
            document.addEventListener('DOMContentLoaded', function() {
                const mobileMenuBtn = document.getElementById('mobileMenuBtn');
                const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
                const menuContent = mobileMenuOverlay.querySelector('div.bg-white');
                
                // Function to open menu
                function openMenu() {
                    mobileMenuOverlay.classList.remove('hidden');
                    // Reset the transform first to trigger the animation
                    menuContent.style.transform = 'translateY(100%)';
                    setTimeout(() => {
                        menuContent.style.transform = 'translateY(0)';
                    }, 10);
                }
                
                // Function to close menu
                function closeMenu() {
                    menuContent.style.transform = 'translateY(100%)';
                    setTimeout(() => {
                        mobileMenuOverlay.classList.add('hidden');
                    }, 300);
                }
                
                // Toggle menu on button click
                mobileMenuBtn.addEventListener('click', function() {
                    if (mobileMenuOverlay.classList.contains('hidden')) {
                        openMenu();
                    } else {
                        closeMenu();
                    }
                });
                
                // Close menu when clicking overlay
                mobileMenuOverlay.addEventListener('click', function(e) {
                    if (e.target === mobileMenuOverlay) {
                        closeMenu();
                    }
                });
                
                // Prevent scroll when menu is open
                mobileMenuOverlay.addEventListener('touchmove', function(e) {
                    e.preventDefault();
                }, { passive: false });
                
                // Close menu on menu item click
                const menuItems = mobileMenuOverlay.querySelectorAll('a');
                menuItems.forEach(item => {
                    item.addEventListener('click', closeMenu);
                });
            });
        </script>
        <script>
            // Hero Slider
            document.addEventListener('DOMContentLoaded', function() {
                const slides = document.querySelectorAll('.slide');
                const dots = document.querySelectorAll('.slider-dot');
                let currentSlide = 0;
                const slideInterval = 5000; // Change slide every 5 seconds
                
                function goToSlide(n) {
                    // Remove active class from current slide and dot
                    slides[currentSlide].classList.remove('active');
                    dots[currentSlide].classList.remove('active');
                    
                    // Update current slide
                    currentSlide = (n + slides.length) % slides.length;
                    
                    // Add active class to new slide and dot
                    slides[currentSlide].classList.add('active');
                    dots[currentSlide].classList.add('active');
                }
                
                function nextSlide() {
                    goToSlide(currentSlide + 1);
                }
                
                // Auto advance slides
                let slideTimer = setInterval(nextSlide, slideInterval);
                
                // Click handlers for dots
                dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        clearInterval(slideTimer);
                        goToSlide(index);
                        slideTimer = setInterval(nextSlide, slideInterval);
                    });
                });
                
                // Optional: Pause on hover
                const sliderContainer = document.getElementById('heroSlider');
                
                sliderContainer.addEventListener('mouseenter', () => {
                    clearInterval(slideTimer);
                });
                
                sliderContainer.addEventListener('mouseleave', () => {
                    slideTimer = setInterval(nextSlide, slideInterval);
                });
                
                // Optional: Swipe support for mobile
                let touchStartX = 0;
                let touchEndX = 0;
                
                sliderContainer.addEventListener('touchstart', e => {
                    touchStartX = e.changedTouches[0].screenX;
                }, false);
                
                sliderContainer.addEventListener('touchend', e => {
                    touchEndX = e.changedTouches[0].screenX;
                    handleSwipe();
                }, false);
                
                function handleSwipe() {
                    const swipeThreshold = 50;
                    if (touchEndX < touchStartX - swipeThreshold) {
                        // Swipe left
                        clearInterval(slideTimer);
                        nextSlide();
                        slideTimer = setInterval(nextSlide, slideInterval);
                    }
                    if (touchEndX > touchStartX + swipeThreshold) {
                        // Swipe right
                        clearInterval(slideTimer);
                        goToSlide(currentSlide - 1);
                        slideTimer = setInterval(nextSlide, slideInterval);
                    }
                }
            });
        </script>
    </body>
</html>