<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add Heroicons for better icons -->
    <script src="https://unpkg.com/@heroicons/v2/outline/24/esm/*.js"></script>
    <!-- Add Inter font for modern typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- Sidebar for larger screens -->
        <aside class="fixed hidden lg:flex lg:flex-col w-64 h-screen bg-white border-r border-gray-200 overflow-y-auto">
            <div class="flex items-center justify-center h-16 border-b border-gray-200">
                <h1 class="text-xl font-bold text-indigo-600">Admin Portal</h1>
            </div>
            <!-- Perbarui bagian nav di sidebar -->
            <nav class="flex-1 px-4 py-4 space-y-1.5"> <!-- Ubah py-6 ke py-4 dan space-y-2 ke space-y-1.5 -->
                <!-- Dashboard -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-700 bg-gray-100 rounded-lg"> <!-- Sesuaikan padding dan ukuran font -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>

                <!-- Location (New) -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Location
                </a>

                <!-- Hero Section -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Hero Section
                </a>

                <!-- Features -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    Features
                </a>

                <!-- Services -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Services
                </a>

                <!-- Additional Services -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                    Additional Services
                </a>

                <!-- My Partner -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    My Partner
                </a>

                <!-- Testimonial -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                    Testimonial
                </a>

                <!-- FAQ -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    FAQ
                </a>

                <!-- Contact -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Contact
                </a>
            </nav>

            <div class="border-t border-gray-200 p-4">
                <div class="flex items-center">
                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin&background=6366F1&color=fff" alt="Admin">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700">Admin User</p>
                        <p class="text-xs text-gray-500">admin@example.com</p>
                    </div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center px-4 py-2 text-sm text-red-600 rounded-lg hover:bg-red-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Mobile header -->
        <div class="lg:hidden">
            <div class="bg-white border-b border-gray-200">
                <div class="px-4 py-4">
                    <div class="flex items-center justify-between">
                        <h1 class="text-lg font-bold text-indigo-600">Admin Portal</h1>
                        <button type="button" class="text-gray-600 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <main class="lg:pl-64">
            <div class="p-6 lg:p-8">
                <!-- Greeting Section with improved design -->
                <div class="bg-gradient-to-r from-indigo-500 to-blue-600 rounded-2xl shadow-xl p-8 mb-8 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <h1 class="text-3xl font-bold">Selamat Datang, {{ auth()->user()->name }}! 👋</h1>
                            <p class="text-white/90 mt-2 text-lg">Siap untuk memberikan layanan terbaik hari ini</p>
                        </div>
                        <div class="text-right bg-white/10 backdrop-blur-sm rounded-lg p-4">
                            <p class="text-sm font-medium">{{ \Carbon\Carbon::now()->format('l, d F Y') }}</p>
                            <p class="text-2xl font-bold mt-1">{{ \Carbon\Carbon::now()->format('H:i') }} WIB</p>
                        </div>
                    </div>
                </div>

                <!-- Panel Admin Info Section with improved design -->
                <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Tentang Panel Admin</h2>
                    <p class="text-gray-600 leading-relaxed mb-8 text-lg">
                        Selamat datang di Panel Admin Multimedia Link Technology. Panel ini dirancang untuk membantu Anda mengelola
                        layanan dengan lebih efisien dan memberikan pengalaman terbaik bagi pelanggan kami.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-gray-50 rounded-xl p-6 hover:bg-gray-100 transition-colors">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Fitur Utama</h3>
                            <ul class="space-y-4">
                                <li class="flex items-center text-gray-700">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-blue-100 text-blue-500 rounded-lg mr-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </span>
                                    Manajemen Konten Website
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-blue-100 text-blue-500 rounded-lg mr-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </span>
                                    Pengelolaan Paket Internet
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-blue-100 text-blue-500 rounded-lg mr-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </span>
                                    Manajemen Pelanggan
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-blue-100 text-blue-500 rounded-lg mr-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </span>
                                    Pengelolaan Testimonial
                                </li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 rounded-xl p-6 hover:bg-gray-100 transition-colors">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Panduan Penggunaan</h3>
                            <ul class="space-y-4">
                                <li class="flex items-center text-gray-700">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-indigo-100 text-indigo-500 rounded-lg mr-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </span>
                                    Menu navigasi ada di sidebar kiri
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-indigo-100 text-indigo-500 rounded-lg mr-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </span>
                                    Cek notifikasi secara berkala
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-indigo-100 text-indigo-500 rounded-lg mr-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </span>
                                    Jangan lupa simpan perubahan
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-indigo-100 text-indigo-500 rounded-lg mr-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </span>
                                    Logout untuk keamanan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Company Appreciation Section -->
                <div class="bg-gradient-to-r from-indigo-600 to-blue-700 rounded-xl shadow-xl p-8 text-white">
                    <h2 class="text-2xl font-bold mb-6">Tentang Multimedia Link Technology</h2>
                    <div class="space-y-6">
                        <p class="leading-relaxed text-lg">
                            Multimedia Link Technology adalah perusahaan penyedia layanan internet yang berkomitmen untuk memberikan
                            konektivitas terbaik bagi pelanggan. Dengan berbagai inovasi dan dedikasi untuk pelayanan,
                            kami terus berkembang untuk memenuhi kebutuhan digital masyarakat.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
                                <h3 class="font-bold text-xl mb-3">Visi</h3>
                                <p class="text-white/90">Menjadi penyedia layanan internet terpercaya dengan kualitas premium dan
                                    pelayanan terbaik di Indonesia</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
                                <h3 class="font-bold text-xl mb-3">Misi</h3>
                                <p class="text-white/90">Memberikan layanan internet berkualitas tinggi dengan harga terjangkau dan
                                    dukungan pelanggan 24/7</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
                                <h3 class="font-bold text-xl mb-3">Nilai</h3>
                                <p class="text-white/90">Mengutamakan kepuasan pelanggan, inovasi berkelanjutan, dan pelayanan
                                    profesional</p>
                            </div>
                        </div>
                        <div class="mt-8 flex items-center justify-between">
                            <p class="text-sm opacity-90">
                                © {{ date('Y') }} Multimedia Link Technology | Versi 1.0.0
                            </p>
                            <p class="text-sm opacity-90">
                                Update Terakhir: {{ \Carbon\Carbon::now()->format('d M Y') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>