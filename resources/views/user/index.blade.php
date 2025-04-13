<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multimedia Link Technology - Internet Fiber Premium Indonesia</title>
        
        <!-- External CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- Di bagian head, tambahkan setelah external CSS yang ada -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        
        {{-- Custom CSS --}}
        <link rel="stylesheet" href="{{ asset('assets/css/home-user.css') }}">

    </head>
    <body class="bg-gray-50 text-gray-800">
        <x-navbar></x-navbar>

        <x-navbar-mobile></x-navbar-mobile>

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
                            <a href="#layanan" 
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
                    <div class="text-center p-6 hover:transform hover:scale-105 transition-all" data-aos="fade-up" data-aos-delay="50">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center 
                                  justify-center mx-auto mb-4">
                            <i class="fas fa-bolt text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Ultra Fast</h3>
                        <p class="text-gray-600">Kecepatan download hingga 100 Mbps</p>
                    </div>

                    <!-- Feature Card 2 -->
                    <div class="text-center p-6 hover:transform hover:scale-105 transition-all" data-aos="fade-up" data-aos-delay="50">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center 
                                  justify-center mx-auto mb-4">
                            <i class="fas fa-wifi text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Stable Connection</h3>
                        <p class="text-gray-600">Koneksi stabil 24/7 dengan uptime 99.9%</p>
                    </div>

                    <!-- Feature Card 3 -->
                    <div class="text-center p-6 hover:transform hover:scale-105 transition-all" data-aos="fade-up" data-aos-delay="50">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center 
                                  justify-center mx-auto mb-4">
                            <i class="fas fa-headset text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">24/7 Support</h3>
                        <p class="text-gray-600">Layanan pelanggan siap membantu</p>
                    </div>

                    <!-- Feature Card 4 -->
                    <div class="text-center p-6 hover:transform hover:scale-105 transition-all" data-aos="fade-up" data-aos-delay="50">
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
        <section class="py-16 md:py-20 bg-gray-50" id="layanan">
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
                              transition-all" data-aos="fade-up" data-aos-delay="75">
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
                              border-2 border-blue-500 package-card transition-all relative" data-aos="fade-up" data-aos-delay="75">
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
                              transition-all" data-aos="fade-up" data-aos-delay="75">
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
                    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 package-card transition-all" data-aos="fade-up" data-aos-delay="75">
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

        <!-- Additional Services Section -->
        <section class="py-16 md:py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-4">
                    Layanan Lainnya
                </h2>
                <p class="text-center text-gray-600 mb-12">
                    Solusi lengkap untuk kebutuhan teknologi dan digital Anda
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Internet Service Provider Card -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="75">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=2670&auto=format&fit=crop"
                                alt="Internet Service Provider"
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                        <div class="p-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                                <i class="fas fa-wifi text-2xl text-blue-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Internet Service Provider</h3>
                            <p class="text-gray-600 mb-4">
                                Layanan internet fiber premium dengan kecepatan tinggi dan stabilitas maksimal untuk rumah dan bisnis Anda.
                            </p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Fiber Optic Technology
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    24/7 Technical Support
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    99.9% Uptime Guarantee
                                </li>
                            </ul>
                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                                Pelajari Lebih Lanjut
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Software Development Card -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="75">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1503252947848-7338d3f92f31?q=80&w=2670&auto=format&fit=crop"
                                alt="Software Development"
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                        <div class="p-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                                <i class="fas fa-code text-2xl text-blue-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Software Development</h3>
                            <p class="text-gray-600 mb-4">
                                Layanan pengembangan software kustom untuk memenuhi kebutuhan spesifik bisnis Anda dengan teknologi terkini.
                            </p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Custom Application Development
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Web & Mobile Solutions
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    API Integration
                                </li>
                            </ul>
                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                                Pelajari Lebih Lanjut
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- IT Solution Card -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="75">
                        <div class="relative h-48">
                            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2670&auto=format&fit=crop"
                                alt="IT Solution"
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                        <div class="p-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                                <i class="fas fa-laptop-code text-2xl text-blue-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">IT Solution</h3>
                            <p class="text-gray-600 mb-4">
                                Solusi IT komprehensif untuk mengoptimalkan dan mengamankan infrastruktur teknologi perusahaan Anda.
                            </p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    IT Infrastructure Setup
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Cloud Solutions
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Cybersecurity Services
                                </li>
                            </ul>
                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                                Pelajari Lebih Lanjut
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Section dengan Infinite Slider -->
        <section class="py-16 md:py-20 bg-white overflow-hidden">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-4">
                    Partner Kami
                </h2>
                <p class="text-center text-gray-600 mb-12">
                    Berkolaborasi dengan perusahaan teknologi terkemuka untuk memberikan layanan terbaik
                </p>

                <!-- Slider Container -->
                <div class="relative">
                    <!-- First Slider (Original) -->
                    <div class="flex animate-scroll">
                        <!-- Google -->
                        <div class="flex items-center justify-center min-w-[200px] px-8">
                            <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" 
                                alt="Google" 
                                class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                        </div>
                        <!-- Microsoft -->
                        <div class="flex items-center justify-center min-w-[200px] px-8">
                            <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31" 
                                alt="Microsoft" 
                                class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                        </div>
                        <!-- Amazon -->
                        <div class="flex items-center justify-center min-w-[200px] px-8">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/2560px-Amazon_logo.svg.png" 
                                alt="Amazon" 
                                class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                        </div>
                        <!-- IBM -->
                        <div class="flex items-center justify-center min-w-[200px] px-8">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/IBM_logo.svg/2560px-IBM_logo.svg.png" 
                                alt="IBM" 
                                class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                        </div>
                        <!-- Intel -->
                        <div class="flex items-center justify-center min-w-[200px] px-8">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Intel_logo_%282006-2020%29.svg/2560px-Intel_logo_%282006-2020%29.svg.png" 
                                alt="Intel" 
                                class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                        </div>
                        <!-- Cisco -->
                        <div class="flex items-center justify-center min-w-[200px] px-8">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Cisco_logo_blue_2016.svg/2560px-Cisco_logo_blue_2016.svg.png" 
                                alt="Cisco" 
                                class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                        </div>

                        <!-- Duplicate for seamless loop -->
                        <!-- Google -->
                        <div class="flex items-center justify-center min-w-[200px] px-8">
                            <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" 
                                alt="Google" 
                                class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                        </div>
                        <!-- Microsoft -->
                        <div class="flex items-center justify-center min-w-[200px] px-8">
                            <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31" 
                                alt="Microsoft" 
                                class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                        </div>
                        <!-- Amazon -->
                        <div class="flex items-center justify-center min-w-[200px] px-8">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/2560px-Amazon_logo.svg.png" 
                                alt="Amazon" 
                                class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                        </div>
                        <!-- IBM -->
                        <div class="flex items-center justify-center min-w-[200px] px-8">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/IBM_logo.svg/2560px-IBM_logo.svg.png" 
                                alt="IBM" 
                                class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                        </div>
                        <!-- Intel -->
                        <div class="flex items-center justify-center min-w-[200px] px-8">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Intel_logo_%282006-2020%29.svg/2560px-Intel_logo_%282006-2020%29.svg.png" 
                                alt="Intel" 
                                class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                        </div>
                        <!-- Cisco -->
                        <div class="flex items-center justify-center min-w-[200px] px-8">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Cisco_logo_blue_2016.svg/2560px-Cisco_logo_blue_2016.svg.png" 
                                alt="Cisco" 
                                class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-16 md:py-20 bg-gray-50 overflow-hidden">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-4">
                    Testimonial
                </h2>
                <p class="text-center text-gray-600 mb-12">
                    Apa kata mereka tentang layanan kami
                </p>

                <!-- Testimonial Slider Container -->
                <div class="relative">
                    <div class="flex testimonial-scroll">
                        <!-- Original Testimonials -->
                        <!-- Testimonial Card 1 -->
                        <div class="min-w-[300px] md:min-w-[400px] px-6" data-aos="fade-left" data-aos-delay="100">
                            <div class="bg-white rounded-xl p-8 relative">
                                <div class="absolute -top-10 left-1/2 transform -translate-x-1/2">
                                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=200&h=200&auto=format&fit=crop"
                                        alt="Client 1"
                                        class="w-20 h-20 rounded-full border-4 border-white shadow-lg object-cover">
                                </div>
                                <div class="text-center pt-12">
                                    <p class="text-gray-600 italic mb-4">
                                        "Kecepatan internet yang luar biasa stabil dan customer service yang sangat responsif. Sangat membantu untuk kebutuhan bisnis saya."
                                    </p>
                                    <h4 class="font-semibold text-lg">John Doe</h4>
                                    <p class="text-sm text-gray-500">CEO, Tech Startup</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Card 2 -->
                        <div class="min-w-[300px] md:min-w-[400px] px-6" data-aos="fade-left" data-aos-delay="100">
                            <div class="bg-white rounded-xl p-8 relative">
                                <div class="absolute -top-10 left-1/2 transform -translate-x-1/2">
                                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=200&h=200&auto=format&fit=crop"
                                        alt="Client 2"
                                        class="w-20 h-20 rounded-full border-4 border-white shadow-lg object-cover">
                                </div>
                                <div class="text-center pt-12">
                                    <p class="text-gray-600 italic mb-4">
                                        "Proses instalasi cepat dan teknisi sangat profesional. Koneksi stabil membantu saya bekerja dari rumah dengan lancar."
                                    </p>
                                    <h4 class="font-semibold text-lg">Sarah Johnson</h4>
                                    <p class="text-sm text-gray-500">Digital Marketing Manager</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Card 3 -->
                        <div class="min-w-[300px] md:min-w-[400px] px-6" data-aos="fade-left" data-aos-delay="100">
                            <div class="bg-white rounded-xl p-8 relative">
                                <div class="absolute -top-10 left-1/2 transform -translate-x-1/2">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=200&h=200&auto=format&fit=crop"
                                        alt="Client 3"
                                        class="w-20 h-20 rounded-full border-4 border-white shadow-lg object-cover">
                                </div>
                                <div class="text-center pt-12">
                                    <p class="text-gray-600 italic mb-4">
                                        "Layanan pelanggan 24/7 yang sangat membantu. Setiap kendala selalu diselesaikan dengan cepat dan profesional."
                                    </p>
                                    <h4 class="font-semibold text-lg">Michael Chen</h4>
                                    <p class="text-sm text-gray-500">Game Developer</p>
                                </div>
                            </div>
                        </div>

                        <!-- Duplicate cards for infinite scroll -->
                        <!-- Testimonial Card 1 (Duplicate) -->
                        <div class="min-w-[300px] md:min-w-[400px] px-6" data-aos="fade-left" data-aos-delay="100">
                            <div class="bg-white rounded-xl p-8 relative">
                                <div class="absolute -top-10 left-1/2 transform -translate-x-1/2">
                                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=200&h=200&auto=format&fit=crop"
                                        alt="Client 1"
                                        class="w-20 h-20 rounded-full border-4 border-white shadow-lg object-cover">
                                </div>
                                <div class="text-center pt-12">
                                    <p class="text-gray-600 italic mb-4">
                                        "Kecepatan internet yang luar biasa stabil dan customer service yang sangat responsif. Sangat membantu untuk kebutuhan bisnis saya."
                                    </p>
                                    <h4 class="font-semibold text-lg">John Doe</h4>
                                    <p class="text-sm text-gray-500">CEO, Tech Startup</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Card 2 (Duplicate) -->
                        <div class="min-w-[300px] md:min-w-[400px] px-6" data-aos="fade-left" data-aos-delay="100">
                            <div class="bg-white rounded-xl p-8 relative">
                                <div class="absolute -top-10 left-1/2 transform -translate-x-1/2">
                                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=200&h=200&auto=format&fit=crop"
                                        alt="Client 2"
                                        class="w-20 h-20 rounded-full border-4 border-white shadow-lg object-cover">
                                </div>
                                <div class="text-center pt-12">
                                    <p class="text-gray-600 italic mb-4">
                                        "Proses instalasi cepat dan teknisi sangat profesional. Koneksi stabil membantu saya bekerja dari rumah dengan lancar."
                                    </p>
                                    <h4 class="font-semibold text-lg">Sarah Johnson</h4>
                                    <p class="text-sm text-gray-500">Digital Marketing Manager</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Card 3 (Duplicate) -->
                        <div class="min-w-[300px] md:min-w-[400px] px-6" data-aos="fade-left" data-aos-delay="100">
                            <div class="bg-white rounded-xl p-8 relative">
                                <div class="absolute -top-10 left-1/2 transform -translate-x-1/2">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=200&h=200&auto=format&fit=crop"
                                        alt="Client 3"
                                        class="w-20 h-20 rounded-full border-4 border-white shadow-lg object-cover">
                                </div>
                                <div class="text-center pt-12">
                                    <p class="text-gray-600 italic mb-4">
                                        "Layanan pelanggan 24/7 yang sangat membantu. Setiap kendala selalu diselesaikan dengan cepat dan profesional."
                                    </p>
                                    <h4 class="font-semibold text-lg">Michael Chen</h4>
                                    <p class="text-sm text-gray-500">Game Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-16 md:py-20 bg-white" id="FAQ">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-4">
                    Pertanyaan yang Sering Ditanyakan
                </h2>
                <p class="text-center text-gray-600 mb-12">
                    Temukan jawaban untuk pertanyaan yang sering diajukan
                </p>

                <!-- FAQ Container -->
                <div class="max-w-3xl mx-auto space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="border border-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="50">
                        <button class="w-full flex items-center justify-between p-4 md:p-5 hover:bg-gray-50 transition-all" 
                                onclick="toggleFAQ(this)">
                            <span class="font-semibold text-left">Bagaimana cara berlangganan internet fiber?</span>
                            <i class="fas fa-chevron-down transform transition-transform"></i>
                        </button>
                        <div class="hidden px-4 pb-4 md:px-5 md:pb-5">
                            <p class="text-gray-600">
                                Untuk berlangganan, Anda dapat mengikuti langkah berikut:
                                <br>1. Pilih paket yang sesuai dengan kebutuhan Anda
                                <br>2. Cek ketersediaan layanan di area Anda
                                <br>3. Hubungi tim sales kami melalui WhatsApp atau telepon
                                <br>4. Tim teknisi akan melakukan survei lokasi
                                <br>5. Setelah disetujui, instalasi akan dilakukan dalam 24 jam
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="border border-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="50">
                        <button class="w-full flex items-center justify-between p-4 md:p-5 hover:bg-gray-50 transition-all"
                                onclick="toggleFAQ(this)">
                            <span class="font-semibold text-left">Berapa lama proses instalasi internet?</span>
                            <i class="fas fa-chevron-down transform transition-transform"></i>
                        </button>
                        <div class="hidden px-4 pb-4 md:px-5 md:pb-5">
                            <p class="text-gray-600">
                                Proses instalasi internet fiber kami maksimal 24 jam setelah survei lokasi disetujui. 
                                Tim teknisi profesional kami akan melakukan instalasi dengan rapi dan bersih, serta 
                                memastikan koneksi berfungsi dengan optimal sebelum menyelesaikan instalasi.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="border border-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="50">
                        <button class="w-full flex items-center justify-between p-4 md:p-5 hover:bg-gray-50 transition-all"
                                onclick="toggleFAQ(this)">
                            <span class="font-semibold text-left">Apakah ada biaya instalasi?</span>
                            <i class="fas fa-chevron-down transform transition-transform"></i>
                        </button>
                        <div class="hidden px-4 pb-4 md:px-5 md:pb-5">
                            <p class="text-gray-600">
                                Untuk pelanggan baru, kami memberikan promo GRATIS biaya instalasi dengan 
                                syarat berlangganan minimal 6 bulan. Semua perangkat yang diperlukan untuk 
                                instalasi juga kami sediakan tanpa biaya tambahan.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="border border-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="50">
                        <button class="w-full flex items-center justify-between p-4 md:p-5 hover:bg-gray-50 transition-all"
                                onclick="toggleFAQ(this)">
                            <span class="font-semibold text-left">Bagaimana jika terjadi gangguan internet?</span>
                            <i class="fas fa-chevron-down transform transition-transform"></i>
                        </button>
                        <div class="hidden px-4 pb-4 md:px-5 md:pb-5">
                            <p class="text-gray-600">
                                Kami menyediakan layanan customer service 24/7 yang siap membantu jika terjadi gangguan. 
                                Anda dapat menghubungi kami melalui:
                                <br>- Call Center: 1500-XXX
                                <br>- WhatsApp: 0812-XXXX-XXXX
                                <br>- Email: support@multimedia-link.com
                                <br>Tim teknisi kami akan merespon maksimal 2 jam setelah laporan diterima.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="border border-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="50">
                        <button class="w-full flex items-center justify-between p-4 md:p-5 hover:bg-gray-50 transition-all"
                                onclick="toggleFAQ(this)">
                            <span class="font-semibold text-left">Apakah bisa upgrade/downgrade paket?</span>
                            <i class="fas fa-chevron-down transform transition-transform"></i>
                        </button>
                        <div class="hidden px-4 pb-4 md:px-5 md:pb-5">
                            <p class="text-gray-600">
                                Ya, Anda dapat melakukan upgrade atau downgrade paket sewaktu-waktu dengan 
                                menghubungi customer service kami. Perubahan paket akan efektif pada periode 
                                tagihan berikutnya tanpa biaya tambahan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="kontak" class="py-16 md:py-20 md:px-10 bg-gray-50">
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
                        
                        <div class="space-y-6">
                            <!-- Phone -->
                            <div class="flex items-start" data-aos="fade-right" data-aos-delay="50">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center 
                                        justify-center mr-5 flex-shrink-0">
                                    <i class="fas fa-phone text-blue-600 text-xl"></i>
                                </div>
                                <div class="pt-1">
                                    <h3 class="font-semibold text-lg mb-1">Telepon</h3>
                                    <p class="text-gray-600">0800-1234-5678</p>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="flex items-start" data-aos="fade-right" data-aos-delay="50">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center 
                                        justify-center mr-5 flex-shrink-0">
                                    <i class="fas fa-envelope text-blue-600 text-xl"></i>
                                </div>
                                <div class="pt-1">
                                    <h3 class="font-semibold text-lg mb-1">Email</h3>
                                    <p class="text-gray-600">support@multimedialinktechnology.id</p>
                                </div>
                            </div>
                            
                            <!-- Address -->
                            <div class="flex items-start" data-aos="fade-right" data-aos-delay="50">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center 
                                        justify-center mr-5 flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                                </div>
                                <div class="pt-1">
                                    <h3 class="font-semibold text-lg mb-1">Alamat</h3>
                                    <p class="text-gray-600">Jl. Internet Cepat No. 88, Jakarta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div data-aos="fade-up" data-aos-delay="50">
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
        <footer class="bg-gray-900 text-white py-12" id="dukungan">
            <div class="container mx-auto px-4">
                <!-- Footer Content Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Multimedia Link Technology</h4>
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
                    <p>&copy; 2025 Multimedia Link Technology. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <script src="{{ asset('assets/js/slider.js') }}"></script>
        <script>
            function toggleFAQ(element) {
                // Toggle active state
                element.classList.toggle('active');
                
                // Get the content panel
                const content = element.nextElementSibling;
                
                // Toggle the chevron icon
                const icon = element.querySelector('.fa-chevron-down');
                icon.style.transform = content.classList.contains('hidden') ? 'rotate(180deg)' : 'rotate(0)';
                
                // Toggle the content visibility
                content.classList.toggle('hidden');
                
                // Close other FAQs
                const allFAQs = document.querySelectorAll('.border.border-gray-200.rounded-lg');
                allFAQs.forEach(faq => {
                    const faqButton = faq.querySelector('button');
                    const faqContent = faq.querySelector('div[class*="hidden"]');
                    const faqIcon = faq.querySelector('.fa-chevron-down');
                    
                    if (faqButton !== element && faqContent) {
                        faqContent.classList.add('hidden');
                        faqIcon.style.transform = 'rotate(0)';
                        faqButton.classList.remove('active');
                    }
                });
            }
            </script>
            <!-- Di bagian akhir body -->
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