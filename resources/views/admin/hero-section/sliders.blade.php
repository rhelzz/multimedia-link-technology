<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Slider Hero</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
        <!-- Sidebar for larger screens -->
        <x-sidebar-admin></x-sidebar-admin>

        <!-- Main content -->
        <main class="lg:pl-64">
            <div class="container mx-auto px-4 py-8">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-900">Manage Hero Sliders for "{{ $heroSection->title }}"</h1>
                    <div class="flex gap-4">
                        <a href="{{ route('admin.hero-section.index') }}" 
                            class="inline-flex items-center px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg transition-colors">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Back
                        </a>
                        <button onclick="document.getElementById('uploadForm').classList.toggle('hidden')"
                                class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-colors">
                            <i class="fas fa-plus mr-2"></i>
                            Add New Slide
                        </button>
                    </div>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
                        <div class="flex">
                            <i class="fas fa-check-circle mt-1 mr-2"></i>
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                @endif

                <!-- Upload Form -->
                <div id="uploadForm" class="hidden bg-white p-6 rounded-lg shadow-md mb-6">
                    <form action="{{ route('admin.hero-section.sliders.store', $heroSection->id) }}" 
                            method="POST" 
                            enctype="multipart/form-data"
                            class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Slide Image</label>
                            <div class="mt-1 flex items-center">
                                <input type="file" 
                                        name="image" 
                                        accept="image/*" 
                                        required
                                        class="block w-full text-sm text-gray-500
                                                file:mr-4 file:py-2 file:px-4
                                                file:rounded-full file:border-0
                                                file:text-sm file:font-semibold
                                                file:bg-blue-50 file:text-blue-700
                                                hover:file:bg-blue-100
                                                cursor-pointer">
                            </div>
                            @error('image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Order</label>
                            <input type="number" 
                                    name="order" 
                                    value="{{ $heroSection->sliders->count() }}"
                                    min="0"
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            @error('order')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="button" 
                                    onclick="document.getElementById('uploadForm').classList.add('hidden')"
                                    class="mr-3 px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
                                Cancel
                            </button>
                            <button type="submit" 
                                    class="px-4 py-2 text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 rounded-lg transition-colors">
                                Upload Slide
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Slides Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($heroSection->sliders()->orderBy('order')->get() as $slider)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden group transition-all hover:shadow-lg">
                            <div class="relative">
                                <img src="{{ asset('storage/' . $slider->image) }}" 
                                        alt="Slider image" 
                                        class="w-full h-48 object-cover">
                                <!-- Overlay with actions -->
                                <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity 
                                            flex items-center justify-center space-x-4">
                                    <form action="{{ route('admin.hero-section.sliders.toggle', [$heroSection->id, $slider->id]) }}" 
                                            method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" 
                                                class="p-2 rounded-full {{ $slider->is_active ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }} 
                                                        hover:opacity-80 transition-all transform hover:scale-110">
                                            <i class="fas {{ $slider->is_active ? 'fa-eye' : 'fa-eye-slash' }}" 
                                                title="{{ $slider->is_active ? 'Click to deactivate' : 'Click to activate' }}">
                                            </i>
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.hero-section.sliders.destroy', [$heroSection->id, $slider->id]) }}" 
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this slide?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="p-2 rounded-full bg-red-100 text-red-600 hover:opacity-80 transition-all 
                                                        transform hover:scale-110">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center space-x-2">
                                        <span class="text-sm text-gray-600">Order: {{ $slider->order }}</span>
                                        <span class="text-sm text-gray-600">|</span>
                                        <span class="px-2 py-1 text-xs rounded-full {{ $slider->is_active ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                                            {{ $slider->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-12 bg-white rounded-lg shadow">
                            <i class="fas fa-image text-gray-400 text-4xl mb-4"></i>
                            <p class="text-gray-500">No slides added yet.</p>
                            <button onclick="document.getElementById('uploadForm').classList.remove('hidden')"
                                    class="mt-4 text-blue-500 hover:text-blue-600">
                                Add your first slide
                            </button>
                        </div>
                    @endforelse
                </div>
            </div>
        </main>
    </div>
</body>
</html>