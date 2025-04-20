<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">

        <x-sidebar-admin></x-sidebar-admin>

        <!-- Mobile header -->
        <div class="lg:hidden">
            <div class="bg-white border-b border-gray-200">
                <div class="px-4 py-4 flex items-center justify-between">
                    <h1 class="text-lg font-bold text-indigo-600">Admin Portal</h1>
                    <button type="button" class="text-gray-600 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <main class="lg:pl-64">
            <div class="container mx-auto px-4 py-8">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-3xl font-bold text-gray-800">Hero Sections</h1>
                    <a href="{{ route('admin.hero-section.create') }}"
                       class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-xl transition">
                        + Add Hero
                    </a>
                </div>

                @if(session('success'))
                    <div x-data="{ show: true }" x-show="show"
                         class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6 transition">
                        <span>{{ session('success') }}</span>
                        <button @click="show = false" class="absolute top-2 right-3 text-green-700">
                            &times;
                        </button>
                    </div>
                @endif

                <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                            <thead class="bg-gray-100 sticky top-0">
                                <tr>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-600">Title</th>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-600">Subtitle</th>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-600">Description</th>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-600">Price</th>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-600">Slides</th>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-600">Trust</th>
                                    <th class="px-6 py-3 text-left font-semibold text-gray-600">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 bg-white">
                                @forelse($heroSections as $hero)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-6 py-4 text-gray-800">{{ $hero->title }}</td>
                                        <td class="px-6 py-4 text-gray-600">{{ $hero->subtitle }}</td>
                                        <td class="px-6 py-4 text-gray-500">{{ Str::limit($hero->description, 60) }}</td>
                                        <td class="px-6 py-4 text-blue-700 font-medium">{{ $hero->price_text }}</td>
                                        <td class="px-6 py-4">
                                            <div class="flex -space-x-2">
                                                @forelse($hero->sliders as $slider)
                                                    <img src="{{ asset('storage/' . $slider->image) }}"
                                                         alt="Slide"
                                                         class="w-10 h-10 rounded-full border-2 border-white object-cover">
                                                @empty
                                                    <span class="text-gray-400 text-xs">No slides</span>
                                                @endforelse
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-gray-500 space-y-1">
                                            <div><span class="font-medium text-gray-700">Rating:</span> {{ $hero->customer_rating }}</div>
                                            <div><span class="font-medium text-gray-700">Users:</span> {{ $hero->active_customers }}</div>
                                            <div><span class="font-medium text-gray-700">Guarantee:</span> {{ $hero->money_guarantee }}</div>
                                        </td>
                                        <td class="px-6 py-4 flex gap-2">
                                            <a href="{{ route('admin.hero-section.sliders.index', $hero->id) }}"
                                               class="text-green-600 hover:text-green-800 font-semibold text-sm">Slides</a>
                                            <a href="{{ route('admin.hero-section.edit', $hero->id) }}"
                                               class="text-blue-600 hover:text-blue-800 font-semibold text-sm">Edit</a>
                                            <form action="{{ route('admin.hero-section.destroy', $hero->id) }}" method="POST"
                                                  onsubmit="return confirm('Are you sure you want to delete this hero section?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="text-red-600 hover:text-red-800 font-semibold text-sm">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center px-6 py-8 text-gray-400 italic">
                                            No hero sections available.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
