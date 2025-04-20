<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add Heroicons for better icons -->
    <script src="https://unpkg.com/@heroicons/v2/outline/24/esm/*.js"></script>
    <!-- Add Inter font for modern typography -->
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
                <div class="px-4 py-4">
                    <div class="flex items-center justify-between">
                        <h1 class="text-lg font-bold text-indigo-600">Admin Portal</h1>
                        <button type="button" class="text-gray-600 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <main class="lg:pl-64">
            <div class="container mx-auto px-4 py-8">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold">Hero Section Management</h1>
                    <a href="{{ route('admin.hero-section.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add New Hero Section</a>
                </div>
        
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
        
                <div class="bg-white rounded-lg shadow-md overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Subtitle</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Price</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Slides</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Trust Indicators</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($heroSections as $hero)
                            <tr>
                                <td class="px-6 py-4">{{ $hero->title }}</td>
                                <td class="px-6 py-4">{{ $hero->subtitle }}</td>
                                <td class="px-6 py-4">{{ Str::limit($hero->description, 50) }}</td>
                                <td class="px-6 py-4">{{ $hero->price_text }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex -space-x-2">
                                        @foreach($hero->sliders as $slider)
                                            <img src="{{ asset('storage/' . $slider->image) }}" 
                                                 alt="Slider image" 
                                                 class="w-10 h-10 rounded-full border-2 border-white object-cover">
                                        @endforeach
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="space-y-1">
                                        <div class="text-sm">Rating: {{ $hero->customer_rating }}</div>
                                        <div class="text-sm">Customers: {{ $hero->active_customers }}</div>
                                        <div class="text-sm">Guarantee: {{ $hero->money_guarantee }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 flex space-x-2">
                                    <a href="{{ route('admin.hero-section.sliders.index', $hero->id) }}" 
                                       class="text-green-600 hover:text-green-900">Manage Slides</a>
                                    <a href="{{ route('admin.hero-section.edit', $hero->id) }}" 
                                       class="text-blue-600 hover:text-blue-900">Edit</a>
                                    <form action="{{ route('admin.hero-section.destroy', $hero->id) }}" 
                                          method="POST" 
                                          class="inline"
                                          onsubmit="return confirm('Are you sure you want to delete this hero section?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="text-red-600 hover:text-red-900">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>