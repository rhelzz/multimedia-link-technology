<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Cabang {{ $branch->name }} - MLT</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#15008b',
                        primaryDark: '#0d0066',
                        success: '#198754',
                        successDark: '#146c43',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fade-in 0.3s ease-out;
        }
        #mapContainer iframe {
            width: 100% !important;
            height: 100% !important;
            border: 0 !important;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-primary text-white py-6 shadow-md">
        <div class="max-w-screen-lg mx-auto px-4 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h2 class="text-2xl sm:text-3xl font-semibold flex items-center">
                    <i class="fas fa-map-marker-alt mr-2 text-xl"></i> Detail Cabang: {{ $branch->name }}
                </h2>
                <p class="text-sm mt-1 opacity-80">Pilih lokasi terdekat dengan Anda</p>
            </div>
            <a href="{{ route('arealocations.index') }}" 
               class="flex items-center border border-white text-white px-4 py-2 rounded-lg hover:bg-white hover:text-primary transition text-sm">
                <i class="fas fa-arrow-left mr-2"></i> Kembali ke Daftar Cabang
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-screen-lg mx-auto px-4 mb-16 mt-6">
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left font-semibold text-gray-600 uppercase">#</th>
                            <th class="px-6 py-3 text-left font-semibold text-gray-600 uppercase">Kecamatan</th>
                            <th class="px-6 py-3 text-left font-semibold text-gray-600 uppercase">Kelurahan</th>
                            <th class="px-6 py-3 text-left font-semibold text-gray-600 uppercase">Kode Pos</th>
                            <th class="px-6 py-3 text-center font-semibold text-gray-600 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($subBranches as $key => $subBranch)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-gray-700">{{ $key + 1 }}</td>
                            <td class="px-6 py-4 font-medium">{{ $subBranch->subdistrict }}</td>
                            <td class="px-6 py-4">{{ $subBranch->village }}</td>
                            <td class="px-6 py-4">{{ $subBranch->postal_code }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 justify-center">
                                    <a href="{{ $subBranch->getWhatsAppLinkAttribute() }}" 
                                       class="bg-primary hover:bg-primaryDark text-white py-1.5 px-4 rounded-lg text-sm flex items-center justify-center transition">
                                        <i class="fab fa-whatsapp mr-1"></i> Pasang
                                    </a>
                                    <button type="button" 
                                            class="bg-success hover:bg-successDark text-white py-1.5 px-4 rounded-lg text-sm flex items-center justify-center transition"
                                            onclick="showMap('{{ $subBranch->id }}', '{{ $subBranch->subdistrict }}', '{{ $subBranch->village }}')">
                                        <i class="fas fa-map mr-1"></i> Lihat Peta
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-gray-500">
                                <i class="fas fa-map-marked-alt text-4xl mb-3"></i>
                                <p>Tidak ada lokasi yang tersedia untuk cabang ini</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="py-4 px-6 border-t">
                {{ $subBranches->links() }}
            </div>
        </div>
    </main>

    <!-- Map Modal -->
    <div id="mapModal" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-50 hidden">
        <div class="mx-auto my-10 bg-white rounded-xl shadow-lg w-full max-w-4xl animate-fade-in overflow-hidden">
            <!-- Header -->
            <div class="bg-primary text-white px-6 py-4 flex justify-between items-center">
                <h3 class="text-lg font-semibold" id="mapModalLabel">Lokasi di Peta</h3>
                <button type="button" class="text-white hover:text-red-300 text-2xl font-bold" onclick="closeModal()">
                    &times;
                </button>
            </div>

            <!-- Map Content -->
            <div class="p-6">
                <div id="mapContainer" class="w-full aspect-video rounded-lg border border-gray-200 shadow-inner overflow-hidden"></div>
            </div>

            <!-- Footer -->
            <div class="px-6 py-4 bg-gray-50 flex justify-end">
                <button type="button" 
                        class="bg-gray-500 hover:bg-gray-600 text-white font-medium px-6 py-2 rounded-lg transition"
                        onclick="closeModal()">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- JS Map Handler -->
    <script>
        function showMap(id, subdistrict, village) {
            fetch(`/area-locations/map/${id}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('mapModalLabel').textContent = `Peta Lokasi: ${subdistrict}, ${village}`;
                    document.getElementById('mapContainer').innerHTML = data.embed_code;

                    const modal = document.getElementById('mapModal');
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');

                    document.body.style.overflow = 'hidden';
                })
                .catch(error => {
                    console.error('Gagal memuat peta:', error);
                    alert('Gagal memuat peta. Silakan coba lagi nanti.');
                });
        }

        function closeModal() {
            const modal = document.getElementById('mapModal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.getElementById('mapContainer').innerHTML = '';
            document.body.style.overflow = 'auto';
        }
    </script>
</body>
</html>
