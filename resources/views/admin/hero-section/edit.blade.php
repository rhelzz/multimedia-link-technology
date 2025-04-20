<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hero Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        input:focus, textarea:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 1px #3b82f6;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <x-sidebar-admin></x-sidebar-admin>

    <main class="lg:pl-64">
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-xl">
                <h1 class="text-2xl font-bold mb-6">Edit Hero Section</h1>

                <form action="{{ route('admin.hero-section.update', $heroSection->id) }}" 
                      method="POST" 
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Title --}}
                    <fieldset class="mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                        <input id="title" name="title" type="text"
                               class="block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none p-3 text-sm"
                               value="{{ old('title', $heroSection->title) }}">
                        @error('title')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    {{-- Subtitle --}}
                    <fieldset class="mb-6">
                        <label for="subtitle" class="block text-sm font-medium text-gray-700 mb-1">Subtitle</label>
                        <input id="subtitle" name="subtitle" type="text"
                               class="block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none p-3 text-sm"
                               value="{{ old('subtitle', $heroSection->subtitle) }}">
                        @error('subtitle')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    {{-- Description --}}
                    <fieldset class="mb-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea id="description" name="description" rows="3"
                                  class="block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none p-3 text-sm">{{ old('description', $heroSection->description) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    {{-- Price Text --}}
                    <fieldset class="mb-6">
                        <label for="price_text" class="block text-sm font-medium text-gray-700 mb-1">Price Text</label>
                        <input id="price_text" name="price_text" type="text"
                               class="block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none p-3 text-sm"
                               value="{{ old('price_text', $heroSection->price_text) }}">
                        @error('price_text')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    {{-- Feature Tags --}}
                    <fieldset class="mb-6">
                        <label for="feature_tags" class="block text-sm font-medium text-gray-700 mb-1">Feature Tags (separated by commas)</label>
                        <input id="feature_tags" name="feature_tags" type="text"
                               class="block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none p-3 text-sm"
                               value="{{ old('feature_tags', implode(', ', $heroSection->feature_tags)) }}">
                        @error('feature_tags')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    {{-- Grid Fields --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        {{-- Customer Rating --}}
                        <fieldset>
                            <label for="customer_rating" class="block text-sm font-medium text-gray-700 mb-1">Customer Rating</label>
                            <input id="customer_rating" name="customer_rating" type="text"
                                   class="block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none p-3 text-sm"
                                   value="{{ old('customer_rating', $heroSection->customer_rating) }}">
                            @error('customer_rating')
                                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </fieldset>

                        {{-- Active Customers --}}
                        <fieldset>
                            <label for="active_customers" class="block text-sm font-medium text-gray-700 mb-1">Active Customers</label>
                            <input id="active_customers" name="active_customers" type="text"
                                   class="block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none p-3 text-sm"
                                   value="{{ old('active_customers', $heroSection->active_customers) }}">
                            @error('active_customers')
                                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </fieldset>
                    </div>

                    {{-- Money Guarantee --}}
                    <fieldset class="mb-6">
                        <label for="money_guarantee" class="block text-sm font-medium text-gray-700 mb-1">Money Guarantee</label>
                        <input id="money_guarantee" name="money_guarantee" type="text"
                               class="block w-full rounded-xl border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none p-3 text-sm"
                               value="{{ old('money_guarantee', $heroSection->money_guarantee) }}">
                        @error('money_guarantee')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    {{-- Submit + Cancel --}}
                    <div class="flex items-center justify-between mt-8">
                        <button type="submit"
                                class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Update
                        </button>
                        <a href="{{ route('admin.hero-section.index') }}"
                           class="inline-flex items-center bg-gray-300 hover:bg-gray-400 text-gray-800 text-sm font-semibold py-2 px-4 rounded-xl transition">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>