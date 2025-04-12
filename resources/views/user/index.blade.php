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

            /* Components */
            .hero-gradient {
                background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
            }

            /* Animations */
            .transition-all {
                transition: all 0.3s ease;
            }

            .package-card:hover {
                transform: translateY(-5px);
            }

            /* Desktop Navigation Update */
            @media (min-width: 768px) {
                .nav-link {
                    position: relative;
                    padding: 0.5rem 1rem;
                }
                
                .nav-link::after {
                    content: '';
                    position: absolute;
                    bottom: -2px;
                    left: 50%;
                    transform: translateX(-50%);
                    width: 0;
                    height: 2px;
                    background-color: #2563eb;
                    transition: width 0.3s ease;
                }
                
                .nav-link:hover::after {
                    width: 100%;
                }
                
                #mobileMenu {
                    box-shadow: none !important;
                }
            }

            /* Mobile Menu */
            #mobileMenu {
                transition: all 0.3s ease;
            }

            /* Responsive improvements */
            @media (max-width: 768px) {
                .container {
                    padding-left: 1rem;
                    padding-right: 1rem;
                }
                
                section {
                    padding-top: 4rem;
                    padding-bottom: 4rem;
                }
                
                p {
                    font-size: 1rem;
                    line-height: 1.5;
                }
                
                button, 
                a {
                    min-height: 44px;
                    padding: 0.75rem 1rem;
                }
                
                input, 
                textarea {
                    font-size: 16px !important;
                }
            }
        </style>
    </head>
    <body class="bg-gray-50 text-gray-800">
        <!-- Navigation -->
        <header class="bg-white shadow-lg fixed top-0 w-full z-50">
            <div class="container mx-auto px-4 py-3">
                <div class="flex justify-between items-center">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="https://placehold.co/40x40/0066ff/ffffff?text=D" 
                             alt="DeltaNet Logo" 
                             class="h-8 w-8 sm:h-10 sm:w-10 rounded-lg">
                        <span class="text-xl sm:text-2xl font-bold text-blue-600 ml-2">DeltaNet</span>
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <button class="md:hidden text-gray-500 hover:text-blue-600" 
                            onclick="toggleMobileMenu()">
                        <i class="fas fa-bars text-xl"></i>
                    </button>

                    <!-- Desktop Navigation -->
                    <nav id="mobileMenu" 
                         class="hidden absolute md:relative top-full left-0 w-full md:w-auto 
                                bg-white md:bg-transparent md:flex items-center md:space-x-6 
                                shadow-lg md:shadow-none">
                        <div class="flex flex-col md:flex-row w-full md:w-auto md:items-center 
                                  md:space-x-6">
                            <a href="#promo" 
                               class="nav-link p-4 md:p-2 text-gray-600 hover:text-blue-600 
                                      transition-colors border-b md:border-0 border-gray-100">
                                <i class="fas fa-tag mr-1"></i> Promo
                            </a>
                            <a href="#paket" 
                               class="nav-link p-4 md:p-2 text-gray-600 hover:text-blue-600 
                                      transition-colors border-b md:border-0 border-gray-100">
                                <i class="fas fa-box mr-1"></i> Paket
                            </a>
                            <a href="#lokasi" 
                               class="nav-link p-4 md:p-2 text-gray-600 hover:text-blue-600 
                                      transition-colors border-b md:border-0 border-gray-100">
                                <i class="fas fa-map-marker-alt mr-1"></i> Area
                            </a>
                            <a href="#dukungan" 
                               class="nav-link p-4 md:p-2 text-gray-600 hover:text-blue-600 
                                      transition-colors border-b md:border-0 border-gray-100">
                                <i class="fas fa-headset mr-1"></i> Bantuan
                            </a>
                            <a href="#member" 
                               class="md:ml-4 p-4 md:p-2 bg-blue-600 text-white md:px-6 
                                      md:py-2 rounded-none md:rounded-full hover:bg-blue-700 
                                      transition-colors flex items-center justify-center">
                                <i class="fas fa-user mr-2"></i> Member Area
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="min-h-screen pt-20 md:pt-24 pb-16 md:pb-20 bg-cover bg-center relative" 
                 style="background-image: url('https://placehold.co/1920x1080/0066ff/ffffff?text=High-Speed+Internet')">
            <div class="hero-gradient absolute inset-0"></div>
            <div class="container mx-auto px-4 relative z-10 text-white">
                <div class="min-h-[calc(100vh-200px)] flex items-center">
                    <div class="max-w-3xl text-left">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 md:mb-6 leading-tight">
                            Internet Fiber Premium untuk Kebutuhan Digital Anda
                        </h1>
                        <p class="text-lg sm:text-xl md:text-2xl mb-6 md:mb-8 text-gray-200">
                            Nikmati kecepatan hingga 100 Mbps dengan stabilitas tinggi
                            <span class="block mt-2 text-yellow-400 font-semibold text-xl md:text-2xl">
                                Mulai dari Rp199.000/bulan
                            </span>
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#paket" 
                               class="w-full sm:w-auto text-center bg-blue-600 hover:bg-blue-700 
                                      px-6 sm:px-8 py-3 sm:py-4 rounded-full text-base sm:text-lg 
                                      font-semibold transition-all transform hover:scale-105">
                                <i class="fas fa-rocket mr-2"></i> Pilih Paket
                            </a>
                            <a href="#cek-area" 
                               class="w-full sm:w-auto text-center border-2 border-white px-6 
                                      sm:px-8 py-3 sm:py-4 rounded-full text-base sm:text-lg 
                                      font-semibold hover:bg-white hover:text-blue-600 
                                      transition-all">
                                <i class="fas fa-map-marker-alt mr-2"></i> Cek Ketersediaan
                            </a>
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
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
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
            function toggleMobileMenu() {
                const menu = document.getElementById('mobileMenu');
                menu.classList.toggle('hidden');
            }
        </script>
    </body>
</html>