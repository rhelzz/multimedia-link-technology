<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Testimonial</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Testimonial Details</h1>
            <div class="flex space-x-2">
                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg flex items-center">
                    <i class="fas fa-edit mr-2"></i> Edit
                </a>
                <a href="{{ route('admin.testimonials.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-lg flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Back to List
                </a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="col-span-1 flex flex-col items-center">
                        <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->client_name }}" class="w-40 h-40 rounded-full object-cover mb-4">
                        <h2 class="text-xl font-semibold">{{ $testimonial->client_name }}</h2>
                        <p class="text-gray-600">{{ $testimonial->position }}</p>
                    </div>
                    
                    <div class="col-span-2">
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold mb-2">Quote</h3>
                            <div class="bg-gray-50 p-4 rounded-lg italic">
                                "{{ $testimonial->quote }}"
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <span class="font-semibold">Status:</span> 
                                <span class="inline-flex px-2 text-xs font-semibold leading-5 {{ $testimonial->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }} rounded-full ml-2">
                                    {{ $testimonial->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                            
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <span class="font-semibold">Display Order:</span> {{ $testimonial->order }}
                            </div>
                            
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <span class="font-semibold">Created:</span> {{ $testimonial->created_at->format('d M Y, H:i') }}
                            </div>
                            
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <span class="font-semibold">Last Updated:</span> {{ $testimonial->updated_at->format('d M Y, H:i') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>