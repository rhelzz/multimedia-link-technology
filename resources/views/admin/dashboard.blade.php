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
        
        <x-sidebar-admin></x-sidebar-admin>

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