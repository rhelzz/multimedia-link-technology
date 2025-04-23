<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Edit Service</title>
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
                        <h1 class="text-3xl font-bold tracking-tight">Edit Service</h1>
                        <p class="text-gray-500 text-sm mt-1">Update the service information below.</p>
                    </div>
                    <a href="{{ route('admin.services.index') }}"
                       class="text-sm inline-flex items-center text-gray-600 hover:text-blue-600 transition">
                        ← Back
                    </a>
                </div>

                <!-- Form -->
                <form action="{{ route('admin.services.update', $service->id) }}" 
                      method="POST"
                      class="bg-white border border-gray-200 rounded-2xl shadow-sm p-8 transition duration-300 hover:shadow-md">
                    @csrf
                    @method('PUT')

                    <!-- Name -->
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Service Name</label>
                        <input type="text" id="name" name="name" 
                               value="{{ old('name', $service->name) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Enter service name" required>
                        @error('name')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Label -->
                    <div class="mb-6">
                        <label for="label" class="block text-sm font-medium text-gray-700 mb-2">Label</label>
                        <input type="text" id="label" name="label" 
                               value="{{ old('label', $service->label) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Enter service label" required>
                        @error('label')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Price -->
                    <div class="mb-6">
                        <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                        <input type="text" id="price" name="price" 
                               value="{{ old('price', $service->price) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                               placeholder="Enter service price" required>
                        @error('price')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Features -->
                    <div class="mb-6" x-data="{ features: {{ json_encode(old('features', $service->features)) }} }">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Features</label>
                        <div class="space-y-2">
                            <template x-for="(feature, index) in features" :key="index">
                                <div class="flex gap-2">
                                    <input type="text" 
                                           x-model="features[index]"
                                           :name="'features[]'"
                                           class="flex-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                                           placeholder="Enter feature"
                                           required>
                                    <button type="button" 
                                            @click="features = features.filter((_, i) => i !== index)"
                                            class="px-3 py-2 text-red-600 hover:text-red-800 transition"
                                            x-show="features.length > 1">
                                        Remove
                                    </button>
                                </div>
                            </template>
                        </div>
                        <button type="button"
                                @click="features.push('')"
                                class="mt-2 text-sm text-blue-600 hover:text-blue-800 transition">
                            + Add Another Feature
                        </button>
                        @error('features')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Is Favorite -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" 
                                   name="is_favorite" 
                                   class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                   {{ old('is_favorite', $service->is_favorite) ? 'checked' : '' }}>
                            <span class="ml-2 text-sm text-gray-600">Mark as Favorite</span>
                        </label>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex justify-end">
                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
                            Update Service
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>