<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($heroSection) ? 'Edit' : 'Create' }} Hero Section</title>
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
        <!-- Sidebar for larger screens -->
        <aside class="fixed hidden lg:flex lg:flex-col w-64 h-screen bg-white border-r border-gray-200 overflow-y-auto">
            <div class="flex items-center justify-center h-16 border-b border-gray-200">
                <h1 class="text-xl font-bold text-indigo-600">Admin Portal</h1>
            </div>
            <!-- Perbarui bagian nav di sidebar -->
            <nav class="flex-1 px-4 py-4 space-y-1.5"> <!-- Ubah py-6 ke py-4 dan space-y-2 ke space-y-1.5 -->
                <!-- Dashboard -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-700 bg-gray-100 rounded-lg"> <!-- Sesuaikan padding dan ukuran font -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>

                <!-- Location (New) -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Location
                </a>

                <!-- Hero Section -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Hero Section
                </a>

                <!-- Features -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    Features
                </a>

                <!-- Services -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Services
                </a>

                <!-- Additional Services -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                    Additional Services
                </a>

                <!-- My Partner -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    My Partner
                </a>

                <!-- Testimonial -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                    Testimonial
                </a>

                <!-- FAQ -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    FAQ
                </a>

                <!-- Contact -->
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Contact
                </a>
            </nav>

            <div class="border-t border-gray-200 p-4">
                <div class="flex items-center">
                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin&background=6366F1&color=fff" alt="Admin">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700">Admin User</p>
                        <p class="text-xs text-gray-500">admin@example.com</p>
                    </div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center px-4 py-2 text-sm text-red-600 rounded-lg hover:bg-red-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

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
                <div class="max-w-2xl mx-auto">
                    <h1 class="text-2xl font-bold mb-6">{{ isset($heroSection) ? 'Edit' : 'Create' }} Hero Section</h1>
        
                    <form action="{{ isset($heroSection) ? route('admin.hero-section.update', $heroSection->id) : route('admin.hero-section.store') }}" 
                          method="POST" 
                          enctype="multipart/form-data"
                          class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        @if(isset($heroSection))
                            @method('PUT')
                        @endif
        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                Title
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                   id="title" 
                                   type="text" 
                                   name="title"
                                   value="{{ old('title', $heroSection->title ?? '') }}">
                            @error('title')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="subtitle">
                                Subtitle
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                   id="subtitle" 
                                   type="text" 
                                   name="subtitle"
                                   value="{{ old('subtitle', $heroSection->subtitle ?? '') }}">
                            @error('subtitle')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                Description
                            </label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                      id="description" 
                                      name="description"
                                      rows="3">{{ old('description', $heroSection->description ?? '') }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="price_text">
                                Price Text
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                   id="price_text" 
                                   type="text" 
                                   name="price_text"
                                   value="{{ old('price_text', $heroSection->price_text ?? '') }}">
                            @error('price_text')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Hero Images
                            </label>
                            <div class="mt-2 flex flex-col gap-4">
                                <input type="file" 
                                       name="images[]" 
                                       multiple 
                                       accept="image/*"
                                       class="block w-full text-sm text-gray-500
                                              file:mr-4 file:py-2 file:px-4
                                              file:rounded-full file:border-0
                                              file:text-sm file:font-semibold
                                              file:bg-blue-50 file:text-blue-700
                                              hover:file:bg-blue-100">
                                @error('images')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                                
                                @if(isset($heroSection) && $heroSection->images)
                                    <div class="grid grid-cols-3 gap-4 mt-4">
                                        @foreach($heroSection->images as $image)
                                            <div class="relative group">
                                                <img src="{{ asset('storage/' . $image) }}" 
                                                     alt="Hero image" 
                                                     class="w-full h-32 object-cover rounded">
                                                <input type="hidden" name="existing_images[]" value="{{ $image }}">
                                                <button type="button" 
                                                        onclick="removeImage(this)"
                                                        class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 
                                                               opacity-0 group-hover:opacity-100 transition-opacity">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="feature_tags">
                                Feature Tags (Separated by commas)
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                   id="feature_tags" 
                                   type="text" 
                                   name="feature_tags"
                                   value="{{ old('feature_tags', isset($heroSection) ? implode(', ', $heroSection->feature_tags) : '') }}">
                            @error('feature_tags')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
        
                        <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                                    type="submit">
                                {{ isset($heroSection) ? 'Update' : 'Create' }}
                            </button>
                            <a href="{{ route('admin.hero-section.index') }}" 
                               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Cancel
                            </a>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="customer_rating">
                                Customer Rating
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                   id="customer_rating" 
                                   type="text" 
                                   name="customer_rating"
                                   value="{{ old('customer_rating', $heroSection->customer_rating ?? '4.9/5') }}">
                            @error('customer_rating')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="active_customers">
                                Active Customers
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                   id="active_customers" 
                                   type="text" 
                                   name="active_customers"
                                   value="{{ old('active_customers', $heroSection->active_customers ?? '10.000+') }}">
                            @error('active_customers')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="money_guarantee">
                                Money Guarantee Text
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                   id="money_guarantee" 
                                   type="text" 
                                   name="money_guarantee"
                                   value="{{ old('money_guarantee', $heroSection->money_guarantee ?? 'Jaminan Uang Kembali') }}">
                            @error('money_guarantee')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script>
        function removeImage(button) {
            const imageContainer = button.parentElement;
            imageContainer.remove();
        }
    </script>
</body>
</html>