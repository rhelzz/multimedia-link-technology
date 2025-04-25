<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Cabang - MLT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#15008b',
                        primaryDark: '#0d0066',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <div class="bg-primary text-white py-6 mb-6 shadow-md">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold flex items-center">
                <i class="fas fa-map-marker-alt mr-2"></i> Lokasi Cabang MLT
            </h2>
            <p class="mt-1">Pilih cabang terdekat dengan lokasi Anda</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 mb-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($branches as $branch)
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                <div class="bg-primary text-white py-3 px-4 font-semibold">
                    {{ $branch->name }}
                </div>
                <div class="p-5 flex flex-col h-full">
                    <div class="mb-4">
                        <span class="font-bold">Nama Cabang:</span> {{ $branch->name }}
                    </div>
                    <div class="mt-auto text-center">
                        <a href="{{ route('arealocations.subbranches', $branch->id) }}" 
                           class="inline-block bg-primary hover:bg-primaryDark text-white font-medium px-4 py-2 rounded-lg transition duration-300">
                            <i class="fas fa-info-circle mr-1"></i> Informasi Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex justify-center">
            {{ $branches->links() }}
        </div>
    </div>
</body>
</html>