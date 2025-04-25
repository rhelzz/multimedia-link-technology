<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Cabang {{ $branch->name }} - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <div class="min-h-screen" x-data="{ mobileMenuOpen: false }">
        <x-sidebar-admin></x-sidebar-admin>

        <main class="lg:pl-64 py-10 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="flex items-center mb-4">
                    <a href="{{ route('admin.branches.index') }}" class="text-gray-600 hover:text-gray-900 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L4.414 9H17a1 1 0 110 2H4.414l5.293 5.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        Kembali ke Daftar Cabang
                    </a>
                </div>
                
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Detail Lokasi Cabang: {{ $branch->name }}</h1>
                        <p class="text-sm text-gray-500 mt-1">Daftar semua lokasi yang terdaftar di cabang ini.</p>
                    </div>
                    <a href="{{ route('admin.branches.sub-branches.create', $branch->id) }}"
                        class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow text-sm font-medium transition">
                        + Tambah Lokasi
                    </a>
                </div>

                @if (session('success'))
                    <div x-data="{ show: true }" x-show="show"
                        x-transition
                        class="fixed top-5 right-5 bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-lg shadow-lg z-50 flex items-center justify-between w-full max-w-sm">
                        <span>{{ session('success') }}</span>
                        <button @click="show = false" class="ml-4 text-xl font-bold leading-none">&times;</button>
                    </div>
                @endif

                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">No</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Kecamatan</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Kelurahan</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Kode Pos</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">No. WhatsApp</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Status</th>
                                <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-sm">
                            @forelse($subBranches as $key => $subBranch)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-gray-500">
                                        {{ $key + 1 }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        {{ $subBranch->subdistrict }}
                                    </td>
                                    <td class="px-6 py-4 text-gray-500">
                                        {{ $subBranch->village }}
                                    </td>
                                    <td class="px-6 py-4 text-gray-500">
                                        {{ $subBranch->postal_code }}
                                    </td>
                                    <td class="px-6 py-4 text-gray-500">
                                        {{ $subBranch->whatsapp_number }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($subBranch->is_active)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Aktif
                                            </span>
                                        @else
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                Tidak Aktif
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">
                                        <div class="flex items-center justify-center gap-3">
                                            <a href="{{ route('admin.branches.sub-branches.edit', [$branch->id, $subBranch->id]) }}"
                                               class="text-blue-600 hover:underline">✏️ Edit</a>
                                            <form action="{{ route('admin.branches.sub-branches.destroy', [$branch->id, $subBranch->id]) }}"
                                                  method="POST" class="inline-block"
                                                  onsubmit="return confirm('Yakin ingin menghapus detail lokasi ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:underline">🗑️ Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-10 text-center text-gray-500">
                                        <div class="flex flex-col items-center">
                                            <img src="https://www.svgrepo.com/show/331422/empty-box.svg" alt="No Data" class="w-24 mb-4 opacity-70">
                                            <p class="font-semibold text-lg">Tidak ada data lokasi cabang</p>
                                            <p class="text-sm text-gray-400">Tambahkan lokasi baru dengan mengklik tombol di atas.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $subBranches->links() }}
                </div>
            </div>
        </main>
    </div>
</body>
</html>