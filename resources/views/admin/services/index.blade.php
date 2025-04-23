<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar Layanan</title>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Daftar Layanan</h1>
        <a href="{{ route('admin.services.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Tambah Layanan</a>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6">
            @foreach ($services as $service)
                <div class="p-6 rounded-lg shadow-lg {{ $service->is_favorite ? 'bg-blue-100' : 'bg-white' }}">
                    <h2 class="text-xl font-bold">{{ $service->label }}</h2>
                    <p class="text-gray-700">{{ $service->name }}</p>
                    <p class="text-lg font-semibold mt-2">Rp{{ $service->price }}</p>
                    <ul class="mt-4 space-y-2">
                        @foreach ($service->features as $feature)
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>{{ $feature }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="flex mt-4 space-x-2">
                        <a href="{{ route('admin.services.edit', $service) }}" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>