<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Edit Additional Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen" x-data="{ mobileMenuOpen: false }">
        <x-sidebar-admin></x-sidebar-admin>

        <main class="lg:pl-64 py-10 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <!-- Page Title + Back -->
                <div class="flex items-center justify-between mb-10">
                    <div>
                        <h1 class="text-3xl font-bold tracking-tight">Edit Additional Service</h1>
                        <p class="text-gray-500 text-sm mt-1">Update the service information below.</p>
                    </div>
                    <a href="{{ route('admin.additional-services.index') }}"
                       class="text-sm inline-flex items-center text-gray-600 hover:text-blue-600 transition">
                        ← Back
                    </a>
                </div>

                <!-- Form -->
                <form action="{{ route('admin.additional-services.update', $additionalService->id) }}" 
                      method="POST"
                      enctype="multipart/form-data"
                      class="bg-white border border-gray-200 rounded-2xl shadow-sm p-8 transition duration-300 hover:shadow-md">
                    @csrf
                    @method('PUT')

                    <!-- Current Image Preview -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Current Image</label>
                        <div class="mt-1 mb-4">
                            <img src="{{ asset('storage/' . $additionalService->image) }}" 
                                 alt="{{ $additionalService->title }}" 
                                 class="w-40 h-40 object-cover rounded border">
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="mb-6">
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Replace Image</label>
                        <input type="file" id="image" name="image"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               accept="image/*">
                        <p class="text-xs text-gray-500 mt-1">Upload a new image (JPEG, PNG, GIF), or leave empty to keep current image</p>
                        @error('image')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Badge -->
                    <div class="mb-6">
                        <label for="badge" class="block text-sm font-medium text-gray-700 mb-2">Badge Text</label>
                        <input type="text" id="badge" name="badge" 
                               value="{{ old('badge', $additionalService->badge) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Enter badge text (e.g. Premium Service)" required>
                        @error('badge')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Title -->
                    <div class="mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                        <input type="text" id="title" name="title" 
                               value="{{ old('title', $additionalService->title) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Enter service title" required>
                        @error('title')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea id="description" name="description" rows="4"
                                 class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                                 placeholder="Enter service description" required>{{ old('description', $additionalService->description) }}</textarea>
                        @error('description')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Features -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Features (comma-separated)</label>
                        <input type="text" id="features" name="features" 
                               value="{{ old('features', $additionalService->features) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Feature 1, Feature 2, Feature 3" required>
                        <p class="text-xs text-gray-500 mt-1">Separate features with commas</p>
                        @error('features')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Is Active -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" 
                                   name="is_active" 
                                   class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                   {{ old('is_active', $additionalService->is_active) ? 'checked' : '' }}>
                            <span class="ml-2 text-sm text-gray-600">Active Service</span>
                        </label>
                    </div>

                    <!-- Order -->
                    <div class="mb-6">
                        <label for="order" class="block text-sm font-medium text-gray-700 mb-2">Display Order</label>
                        <input type="number" id="order" name="order" 
                               value="{{ old('order', $additionalService->order) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Enter display order (0 = default)">
                        @error('order')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex justify-end">
                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
                            Update Additional Service
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>