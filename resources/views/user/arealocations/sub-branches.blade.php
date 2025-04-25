<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Cabang {{ $branch->name }} - MLT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
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
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <div class="bg-primary text-white py-6 mb-6 shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <h2 class="text-2xl font-bold flex items-center">
                        <i class="fas fa-map-marker-alt mr-2"></i> Detail Cabang: {{ $branch->name }}
                    </h2>
                    <p class="mt-1">Pilih lokasi terdekat dengan Anda</p>
                </div>
                <a href="{{ route('arealocations.index') }}" 
                   class="flex items-center bg-transparent border border-white text-white px-4 py-2 rounded-lg hover:bg-white hover:text-primary transition duration-300">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali ke Daftar Cabang
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 mb-10">
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kecamatan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelurahan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode Pos</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($subBranches as $key => $subBranch)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $key + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $subBranch->subdistrict }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $subBranch->village }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $subBranch->postal_code }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <div class="flex flex-col sm:flex-row justify-center gap-2">
                                    <a href="{{ $subBranch->getWhatsAppLinkAttribute() }}" 
                                       class="bg-primary hover:bg-primaryDark text-white py-1 px-3 rounded-lg transition duration-300" 
                                       target="_blank">
                                        <i class="fab fa-whatsapp mr-1"></i> Pasang
                                    </a>
                                    
                                    <button type="button" 
                                            class="bg-success hover:bg-successDark text-white py-1 px-3 rounded-lg transition duration-300" 
                                            onclick="showMap('{{ $subBranch->id }}', '{{ $subBranch->subdistrict }}', '{{ $subBranch->village }}')">
                                        <i class="fas fa-map mr-1"></i> Lihat Peta
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center">
                                <div class="text-gray-500">
                                    <i class="fas fa-map-marked-alt text-4xl mb-3"></i>
                                    <p>Tidak ada lokasi yang tersedia untuk cabang ini</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="py-4 px-6">
                {{ $subBranches->links() }}
            </div>
        </div>
    </div>

    <!-- Map Modal -->
    <div id="mapModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-xl shadow-lg w-full max-w-4xl max-h-full overflow-hidden">
            <div class="bg-primary text-white px-6 py-4 flex justify-between items-center">
                <h3 class="text-lg font-medium" id="mapModalLabel">Lokasi di Peta</h3>
                <button type="button" class="text-white text-2xl font-bold" onclick="closeModal()">
                    &times;
                </button>
            </div>
            <div class="p-6">
                <div id="mapContainer" class="w-full h-96 overflow-hidden"></div>
            </div>
            <div class="px-6 py-4 bg-gray-50 flex justify-end">
                <button type="button" 
                        class="bg-gray-500 hover:bg-gray-600 text-white font-medium px-6 py-2 rounded-lg transition duration-300"
                        onclick="closeModal()">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <script>
        function showMap(id, subdistrict, village) {
            // Fetch map data
            fetch(`/area-locations/map/${id}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('mapModalLabel').textContent = `Peta Lokasi: ${subdistrict}, ${village}`;
                    
                    const mapContainer = document.getElementById('mapContainer');
                    mapContainer.innerHTML = data.embed_code;
                    
                    document.getElementById('mapModal').classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                })
                .catch(error => {
                    console.error('Error fetching map data:', error);
                    alert('Gagal memuat peta. Silakan coba lagi nanti.');
                });
        }

        function closeModal() {
            document.getElementById('mapModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    </script>
</body>
</html>