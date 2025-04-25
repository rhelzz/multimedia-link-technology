<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Testimonial</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            <div class="container mx-auto px-4 py-8">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Add New Testimonial</h1>
                    <a href="{{ route('admin.testimonials.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-lg flex items-center">
                        <i class="fas fa-arrow-left mr-2"></i> Back to List
                    </a>
                </div>

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                        <strong class="font-bold">Oops!</strong>
                        <span class="block sm:inline">Please check the following errors:</span>
                        <ul class="mt-2 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-1">
                                <label for="client_name" class="block text-gray-700 text-sm font-bold mb-2">Client Name *</label>
                                <input type="text" name="client_name" id="client_name" value="{{ old('client_name') }}" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            
                            <div class="col-span-1">
                                <label for="position" class="block text-gray-700 text-sm font-bold mb-2">Position *</label>
                                <input type="text" name="position" id="position" value="{{ old('position') }}" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            
                            <div class="col-span-2">
                                <label for="quote" class="block text-gray-700 text-sm font-bold mb-2">Quote *</label>
                                <textarea name="quote" id="quote" rows="4" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('quote') }}</textarea>
                            </div>
                            
                            <div class="col-span-1">
                                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Photo *</label>
                                <input type="file" name="image" id="image" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    accept="image/*">
                                <p class="text-gray-500 text-xs mt-1">Upload a square image for best results (recommended: 200x200px)</p>
                            </div>
                            
                            <div class="col-span-1">
                                <label for="order" class="block text-gray-700 text-sm font-bold mb-2">Display Order</label>
                                <input type="number" name="order" id="order" value="{{ old('order') }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <p class="text-gray-500 text-xs mt-1">Leave empty to add to the end</p>
                            </div>
                            
                            <div class="col-span-2">
                                <label class="flex items-center">
                                    <input type="checkbox" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }} class="h-4 w-4 text-blue-600">
                                    <span class="ml-2 text-gray-700">Active</span>
                                </label>
                            </div>
                            
                            <div class="col-span-2 flex justify-end">
                                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg flex items-center">
                                    <i class="fas fa-save mr-2"></i> Save Testimonial
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>