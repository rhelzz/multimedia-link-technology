<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Cabang - Admin</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center mb-6">
            <a href="{{ route('admin.branches.index') }}" class="text-gray-600 hover:text-gray-900 mr-4">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <h1 class="text-2xl font-bold text-gray-800">Tambah Cabang Baru</h1>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-6">
                <form action="{{ route('admin.branches.store') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Cabang <span class="text-red-600">*</span></label>
                        <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            <span class="ml-2 text-sm text-gray-700">Aktif</span>
                        </label>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            <i class="fas fa-save mr-1"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>