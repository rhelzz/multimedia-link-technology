<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lokasi Cabang - Admin</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center mb-6">
            <a href="{{ route('admin.branches.sub-branches.index', $branch->id) }}" class="text-gray-600 hover:text-gray-900 mr-4">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <h1 class="text-2xl font-bold text-gray-800">Edit Lokasi untuk Cabang: {{ $branch->name }}</h1>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-6">
                <form action="{{ route('admin.branches.sub-branches.update', [$branch->id, $subBranch->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="subdistrict" class="block text-sm font-medium text-gray-700 mb-1">Kecamatan <span class="text-red-600">*</span></label>
                            <input type="text" name="subdistrict" id="subdistrict" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('subdistrict') border-red-500 @enderror" value="{{ old('subdistrict', $subBranch->subdistrict) }}" required>
                            @error('subdistrict')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="village" class="block text-sm font-medium text-gray-700 mb-1">Kelurahan <span class="text-red-600">*</span></label>
                            <input type="text" name="village" id="village" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('village') border-red-500 @enderror" value="{{ old('village', $subBranch->village) }}" required>
                            @error('village')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="postal_code" class="block text-sm font-medium text-gray-700 mb-1">Kode Pos <span class="text-red-600">*</span></label>
                            <input type="text" name="postal_code" id="postal_code" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('postal_code') border-red-500 @enderror" value="{{ old('postal_code', $subBranch->postal_code) }}" required>
                            @error('postal_code')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="whatsapp_number" class="block text-sm font-medium text-gray-700 mb-1">Nomor WhatsApp <span class="text-red-600">*</span></label>
                            <input type="text" name="whatsapp_number" id="whatsapp_number" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('whatsapp_number') border-red-500 @enderror" value="{{ old('whatsapp_number', $subBranch->whatsapp_number) }}" placeholder="contoh: 6285850102226" required>
                            @error('whatsapp_number')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="embed_location_code" class="block text-sm font-medium text-gray-700 mb-1">Embed Kode Lokasi (Google Maps)</label>
                        <textarea name="embed_location_code" id="embed_location_code" rows="4" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('embed_location_code') border-red-500 @enderror" placeholder='<iframe src="https://www.google.com/maps/embed?..." width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>'>{{ old('embed_location_code', $subBranch->embed_location_code) }}</textarea>
                        <p class="mt-1 text-sm text-gray-500">Masukkan kode embed dari Google Maps</p>
                        @error('embed_location_code')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $subBranch->is_active) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            <span class="ml-2 text-sm text-gray-700">Aktif</span>
                        </label>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            <i class="fas fa-save mr-1"></i> Perbarui
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>