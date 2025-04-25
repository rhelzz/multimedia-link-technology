<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cabang - Admin</title>
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
                        <h1 class="text-3xl font-bold tracking-tight">Edit Cabang</h1>
                        <p class="text-gray-500 text-sm mt-1">Perbarui informasi cabang: {{ $branch->name }}</p>
                    </div>
                    <a href="{{ route('admin.branches.index') }}"
                       class="text-sm inline-flex items-center text-gray-600 hover:text-blue-600 transition">
                        ← Kembali
                    </a>
                </div>

                <!-- Form -->
                <form action="{{ route('admin.branches.update', $branch->id) }}" method="POST"
                      class="bg-white border border-gray-200 rounded-2xl shadow-sm p-8 transition duration-300 hover:shadow-md">
                    @csrf
                    @method('PUT')

                    <!-- Nama Cabang -->
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Cabang</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $branch->name) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Masukkan nama cabang" required>
                        @error('name')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="is_active" 
                                   class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                   {{ old('is_active', $branch->is_active) ? 'checked' : '' }}>
                            <span class="ml-2 text-sm text-gray-600">Aktif</span>
                        </label>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex justify-end gap-4">
                        <a href="{{ route('admin.branches.sub-branches.index', $branch->id) }}" 
                           class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold px-6 py-2 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-400 transition">
                            Kelola Lokasi
                        </a>
                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
                            Simpan Perubahan
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