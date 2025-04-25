<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lokasi Cabang - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen" x-data="{ mobileMenuOpen: false }">
        <x-sidebar-admin></x-sidebar-admin>

        <main class="lg:pl-64 py-10 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <!-- Page Title + Back -->
                <div class="flex items-center justify-between mb-10">
                    <div>
                        <h1 class="text-3xl font-bold tracking-tight">Tambah Lokasi Baru</h1>
                        <p class="text-gray-500 text-sm mt-1">Untuk cabang: {{ $branch->name }}</p>
                    </div>
                    <a href="{{ route('admin.branches.sub-branches.index', $branch->id) }}"
                       class="text-sm inline-flex items-center text-gray-600 hover:text-blue-600 transition">
                        ← Kembali
                    </a>
                </div>

                <!-- Form -->
                <form action="{{ route('admin.branches.sub-branches.store', $branch->id) }}" method="POST"
                      class="bg-white border border-gray-200 rounded-2xl shadow-sm p-8 transition duration-300 hover:shadow-md">
                    @csrf

                    <!-- Kecamatan -->
                    <div class="mb-6">
                        <label for="subdistrict" class="block text-sm font-medium text-gray-700 mb-2">Kecamatan</label>
                        <input type="text" id="subdistrict" name="subdistrict" value="{{ old('subdistrict') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Masukkan nama kecamatan" required>
                        @error('subdistrict')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Kelurahan -->
                    <div class="mb-6">
                        <label for="village" class="block text-sm font-medium text-gray-700 mb-2">Kelurahan</label>
                        <input type="text" id="village" name="village" value="{{ old('village') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Masukkan nama kelurahan" required>
                        @error('village')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Kode Pos -->
                    <div class="mb-6">
                        <label for="postal_code" class="block text-sm font-medium text-gray-700 mb-2">Kode Pos</label>
                        <input type="text" id="postal_code" name="postal_code" value="{{ old('postal_code') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Masukkan kode pos" required>
                        @error('postal_code')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Embed Location Code -->
                    <div class="mb-6">
                        <label for="embed_location_code" class="block text-sm font-medium text-gray-700 mb-2">Embed Code Google Maps</label>
                        <textarea id="embed_location_code" name="embed_location_code" rows="3"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                                  placeholder="<iframe src='https://maps.google.com/...'></iframe>">{{ old('embed_location_code') }}</textarea>
                        <p class="text-xs text-gray-500 mt-1">Masukkan kode embed dari Google Maps untuk menampilkan lokasi</p>
                        @error('embed_location_code')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Nomor WhatsApp -->
                    <div class="mb-6">
                        <label for="whatsapp_number" class="block text-sm font-medium text-gray-700 mb-2">Nomor WhatsApp</label>
                        <input type="text" id="whatsapp_number" name="whatsapp_number" value="{{ old('whatsapp_number') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Contoh: 628123456789" required>
                        @error('whatsapp_number')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="is_active" 
                                   class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                   {{ old('is_active') ? 'checked' : '' }}>
                            <span class="ml-2 text-sm text-gray-600">Aktif</span>
                        </label>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex justify-end">
                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
                            Simpan
                        </button>
                    </div>
                </form>

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mt-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </main>
    </div>
</body>
</html>