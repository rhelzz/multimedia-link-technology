<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Create Additional Service</title>
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
                        <h1 class="text-3xl font-bold tracking-tight">Add New Additional Service</h1>
                        <p class="text-gray-500 text-sm mt-1">Fill the form below to create a new additional service.</p>
                    </div>
                    <a href="{{ route('admin.additional-services.index') }}"
                       class="text-sm inline-flex items-center text-gray-600 hover:text-blue-600 transition">
                        ← Back
                    </a>
                </div>

                <!-- Form -->
                <form action="{{ route('admin.additional-services.store') }}" method="POST" enctype="multipart/form-data"
                      class="bg-white border border-gray-200 rounded-2xl shadow-sm p-8 transition duration-300 hover:shadow-md">
                    @csrf

                    <!-- Image -->
                    <div class="mb-6">
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Service Image</label>
                        <input type="file" id="image" name="image"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               accept="image/*" required>
                        <p class="text-xs text-gray-500 mt-1">Upload an image (JPEG, PNG, GIF)</p>
                        @error('image')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Badge -->
                    <div class="mb-6">
                        <label for="badge" class="block text-sm font-medium text-gray-700 mb-2">Badge Text</label>
                        <input type="text" id="badge" name="badge" value="{{ old('badge') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Enter badge text (e.g. Premium Service)" required>
                        @error('badge')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Title -->
                    <div class="mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}"
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
                                 placeholder="Enter service description" required>{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Features -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Features (comma-separated)</label>
                        <input type="text" id="features" name="features" value="{{ old('features') }}"
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
                                   {{ old('is_active') ? 'checked' : 'checked' }}>
                            <span class="ml-2 text-sm text-gray-600">Active Service</span>
                        </label>
                    </div>

                    <!-- Order -->
                    <div class="mb-6">
                        <label for="order" class="block text-sm font-medium text-gray-700 mb-2">Display Order</label>
                        <input type="number" id="order" name="order" value="{{ old('order', 0) }}"
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
                            Create Additional Service
                        </button>
                    </div>
                </form>

                @if($errors->any())
                    <div class="mt-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc pl-5">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </main>
    </div>
</body>
</html>