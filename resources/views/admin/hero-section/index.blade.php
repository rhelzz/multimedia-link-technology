<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tambahkan Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen" x-data="{ mobileMenuOpen: false }">
        <x-sidebar-admin></x-sidebar-admin>

        <!-- Mobile header with functioning menu -->
        <div class="lg:hidden">
            <div class="bg-white border-b border-gray-200">
                <div class="px-4 py-4 flex items-center justify-between">
                    <h1 class="text-lg font-bold text-indigo-600">Admin Portal</h1>
                    <button type="button" 
                            @click="mobileMenuOpen = !mobileMenuOpen"
                            class="text-gray-600 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                             class="h-6 w-6" 
                             fill="none"
                             viewBox="0 0 24 24" 
                             stroke="currentColor">
                            <path stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <main class="lg:pl-64">
            <div class="container mx-auto px-4 py-8">
                <!-- Header with actions -->
                <div class="sm:flex sm:items-center sm:justify-between mb-6">
                    <h1 class="text-3xl font-bold text-gray-800">Hero Sections</h1>
                    <div class="mt-4 sm:mt-0">
                        <a href="{{ route('admin.hero-section.create') }}"
                           class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-xl transition">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                 class="h-5 w-5 mr-2" 
                                 viewBox="0 0 20 20" 
                                 fill="currentColor">
                                <path fill-rule="evenodd" 
                                      d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" 
                                      clip-rule="evenodd" />
                            </svg>
                            Add Hero
                        </a>
                    </div>
                </div>

                <!-- Success Message -->
                @if(session('success'))
                    <div x-data="{ show: true }" 
                         x-show="show" 
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative mb-6">
                        <div class="flex">
                            <div class="py-1">
                                <svg class="h-6 w-6 text-green-500 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" 
                                          stroke-linejoin="round" 
                                          stroke-width="2" 
                                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium">{{ session('success') }}</p>
                            </div>
                        </div>
                        <button @click="show = false" 
                                class="absolute bg-green-100 rounded-lg p-1 -m-1 top-0 bottom-0 right-0 my-auto mr-3">
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                @endif

                <!-- Table -->
                <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                            <thead class="bg-gray-100 sticky top-0">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left font-semibold text-gray-600">Title</th>
                                    <th scope="col" class="px-6 py-3 text-left font-semibold text-gray-600">Subtitle</th>
                                    <th scope="col" class="px-6 py-3 text-left font-semibold text-gray-600">Description</th>
                                    <th scope="col" class="px-6 py-3 text-left font-semibold text-gray-600">Price</th>
                                    <th scope="col" class="px-6 py-3 text-left font-semibold text-gray-600">Slides</th>
                                    <th scope="col" class="px-6 py-3 text-left font-semibold text-gray-600">Trust</th>
                                    <th scope="col" class="px-6 py-3 text-left font-semibold text-gray-600">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 bg-white">
                                @forelse($heroSections as $hero)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-6 py-4 text-gray-800">{{ $hero->title }}</td>
                                        <td class="px-6 py-4 text-gray-600">{{ $hero->subtitle }}</td>
                                        <td class="px-6 py-4 text-gray-500">
                                            <div class="tooltip" title="{{ $hero->description }}">
                                                {{ Str::limit($hero->description, 60) }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-blue-700 font-medium">{{ $hero->price_text }}</td>
                                        <td class="px-6 py-4">
                                            <div class="flex -space-x-2">
                                                @forelse($hero->sliders as $slider)
                                                    <img src="{{ asset('storage/' . $slider->image) }}"
                                                         alt="Slide"
                                                         class="w-10 h-10 rounded-full border-2 border-white object-cover hover:scale-150 transition-transform duration-200">
                                                @empty
                                                    <span class="text-gray-400 text-sm">No slides</span>
                                                @endforelse
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-gray-500 space-y-1">
                                            <div class="flex items-center space-x-1">
                                                <span class="font-medium text-gray-700">Rating:</span>
                                                <span class="flex items-center">
                                                    {{ $hero->customer_rating }}
                                                    <svg class="h-4 w-4 text-yellow-400 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div><span class="font-medium text-gray-700">Users:</span> {{ $hero->active_customers }}</div>
                                            <div><span class="font-medium text-gray-700">Guarantee:</span> {{ $hero->money_guarantee }}</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex gap-2">
                                                <a href="{{ route('admin.hero-section.sliders.index', $hero->id) }}"
                                                   class="inline-flex items-center text-green-600 hover:text-green-800 font-semibold text-sm">
                                                   <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                   </svg>
                                                   Slides
                                                </a>
                                                <a href="{{ route('admin.hero-section.edit', $hero->id) }}"
                                                   class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold text-sm">
                                                   <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                   </svg>
                                                   Edit
                                                </a>
                                                <form action="{{ route('admin.hero-section.destroy', $hero->id) }}" 
                                                      method="POST"
                                                      x-data
                                                      @submit.prevent="if(confirm('Are you sure you want to delete this hero section?')) $el.submit()">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="inline-flex items-center text-red-600 hover:text-red-800 font-semibold text-sm">
                                                        <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center px-6 py-8">
                                            <div class="flex flex-col items-center justify-center text-gray-500">
                                                <svg class="h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                                </svg>
                                                <p class="text-gray-400 text-lg font-medium">No hero sections available</p>
                                                <p class="text-gray-400 text-sm mt-1">Add your first hero section to get started</p>
                                            </div>
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