<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Partners</title>
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
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Manage Partners</h1>
                        <p class="text-sm text-gray-500 mt-1">List of all partners displayed on the website.</p>
                    </div>
                    <a href="{{ route('admin.partners.create') }}"
                        class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow text-sm font-medium transition">
                        + Add Partner
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
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Image</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Order</th>
                                <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">Status</th>
                                <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-sm">
                            @forelse ($partners as $partner)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name }}" class="h-12 object-contain">
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900">{{ $partner->name }}</td>
                                    <td class="px-6 py-4">{{ $partner->order }}</td>
                                    <td class="px-6 py-4 text-center">
                                        @if($partner->is_active)
                                            <span class="text-green-600">Active</span>
                                        @else
                                            <span class="text-red-600">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">
                                        <div class="flex items-center justify-center gap-3">
                                            <a href="{{ route('admin.partners.edit', $partner->id) }}"
                                               class="text-blue-600 hover:underline">✏️ Edit</a>
                                            <form action="{{ route('admin.partners.destroy', $partner->id) }}"
                                                  method="POST" class="inline-block"
                                                  onsubmit="return confirm('Are you sure you want to delete this partner?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:underline">🗑️ Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center px-6 py-10 text-gray-500">
                                        <div class="flex flex-col items-center">
                                            <img src="https://www.svgrepo.com/show/331422/empty-box.svg" alt="No Data" class="w-24 mb-4 opacity-70">
                                            <p class="font-semibold text-lg">No partners found</p>
                                            <p class="text-sm text-gray-400">Try adding a new one by clicking the button above.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>