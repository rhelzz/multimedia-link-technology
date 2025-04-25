<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multimedia Link Technology - Internet Fiber Premium Indonesia</title>
        
        <!-- External CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- Di bagian head, tambahkan setelah external CSS yang ada -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        
        {{-- Custom CSS --}}
        <link rel="stylesheet" href="{{ asset('assets/css/home-user.css') }}">

    </head>
    <body class="bg-gray-50 text-gray-800">
        <x-navbar></x-navbar>

        <x-navbar-mobile></x-navbar-mobile>

        <!-- Hero Section -->
        <section class="min-h-screen pt-16 md:pt-24 pb-12 md:pb-20 bg-cover bg-center relative">
            <!-- Slider Container -->
            <div class="slider-container" id="heroSlider">
                @forelse($heroSection->sliders as $index => $slider)
                    <div class="slide {{ $loop->first ? 'active' : '' }}" 
                        style="background-image: url('{{ asset('storage/' . $slider->image) }}')">
                    </div>
                @empty
                    <div class="slide active" 
                        style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1920&auto=format&fit=crop')">
                    </div>
                @endforelse
            </div>
            
            <!-- Slider Navigation -->
            <div class="slider-nav">
                @foreach($heroSection->sliders as $index => $slider)
                    <div class="slider-dot {{ $loop->first ? 'active' : '' }}" data-slide="{{ $loop->index }}"></div>
                @endforeach
            </div>

            <div class="hero-gradient absolute inset-0"></div>
            <div class="container mx-auto px-6 relative z-10 text-white">
                <div class="min-h-[calc(100vh-200px)] flex items-center md:pl-10">
                    <div class="max-w-3xl text-left space-y-5 md:space-y-6">
                        <!-- Hero Title -->
                        <h1 class="text-2xl sm:text-3xl md:text-3xl lg:text-4xl font-bold leading-tight tracking-tight">
                            {{ $heroSection->title }}
                            <span class="block mt-1 md:mt-2">{{ $heroSection->subtitle }}</span>
                        </h1>
                        
                        <!-- Hero Description -->
                        <div class="space-y-3">
                            <p class="text-base sm:text-lg md:text-lg text-gray-100 leading-relaxed max-w-2xl">
                                {{ $heroSection->description }}
                            </p>
                            <p class="inline-block px-4 py-2 bg-black/30 backdrop-blur-sm rounded-lg">
                                <span class="text-yellow-400 font-semibold text-base sm:text-lg md:text-xl">
                                    {{ $heroSection->price_text }}
                                </span>
                            </p>
                        </div>
                        
                        <!-- CTA Buttons -->
                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 pt-3">
                            <a href="#layanan" 
                            class="w-full sm:w-auto text-center bg-blue-600 hover:bg-blue-700 
                                    px-6 py-2.5 sm:py-3 rounded-xl text-base font-semibold 
                                    transition-all transform hover:scale-105
                                    hover:shadow-lg shadow-md">
                                <i class="fas fa-rocket mr-2"></i> Pilih Paket
                            </a>
                            <a href="#cek-area" 
                            class="w-full sm:w-auto text-center border-2 border-white/80 
                                    px-6 py-2.5 sm:py-3 rounded-xl text-base
                                    font-semibold hover:bg-white hover:text-blue-600 
                                    transition-all hover:shadow-lg shadow-md
                                    bg-white/10 backdrop-blur-sm">
                                <i class="fas fa-map-marker-alt mr-2"></i> Cek Ketersediaan
                            </a>
                        </div>
                        
                        <!-- Feature Tags -->
                        <div class="flex flex-wrap gap-3 pt-5 text-sm">
                            @foreach($heroSection->feature_tags as $tag)
                                <span class="bg-white/10 backdrop-blur-sm px-3 py-1.5 rounded-full 
                                        border border-white/20 flex items-center gap-2">
                                    <i class="fas fa-check text-green-400"></i>
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>

                        <!-- Trust Indicators -->
                        <div class="pt-6 flex flex-wrap gap-5 items-center text-sm">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span>{{ $heroSection->customer_rating }} Rating Pelanggan</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-users text-blue-400"></i>
                                <span>{{ $heroSection->active_customers }} Pelanggan Aktif</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-shield-alt text-green-400"></i>
                                <span>{{ $heroSection->money_guarantee }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-12 md:py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                    <!-- Feature Card 1 -->
                    <div class="text-center p-6 hover:transform hover:scale-105 transition-all" data-aos="fade-up" data-aos-delay="50">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center 
                                    justify-center mx-auto mb-4">
                            <i class="fas fa-bolt text-2xl text-blue-600"></i> <!-- Ikon statis -->
                        </div>
                        <h3 class="text-lg font-semibold mb-2">{{ $features[0]->title }}</h3>
                        <p class="text-gray-600">{{ $features[0]->description }}</p>
                    </div>
        
                    <!-- Feature Card 2 -->
                    <div class="text-center p-6 hover:transform hover:scale-105 transition-all" data-aos="fade-up" data-aos-delay="50">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center 
                                    justify-center mx-auto mb-4">
                            <i class="fas fa-wifi text-2xl text-blue-600"></i> <!-- Ikon statis -->
                        </div>
                        <h3 class="text-lg font-semibold mb-2">{{ $features[1]->title }}</h3>
                        <p class="text-gray-600">{{ $features[1]->description }}</p>
                    </div>
        
                    <!-- Feature Card 3 -->
                    <div class="text-center p-6 hover:transform hover:scale-105 transition-all" data-aos="fade-up" data-aos-delay="50">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center 
                                    justify-center mx-auto mb-4">
                            <i class="fas fa-headset text-2xl text-blue-600"></i> <!-- Ikon statis -->
                        </div>
                        <h3 class="text-lg font-semibold mb-2">{{ $features[2]->title }}</h3>
                        <p class="text-gray-600">{{ $features[2]->description }}</p>
                    </div>
        
                    <!-- Feature Card 4 -->
                    <div class="text-center p-6 hover:transform hover:scale-105 transition-all" data-aos="fade-up" data-aos-delay="50">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center 
                                    justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-2xl text-blue-600"></i> <!-- Ikon statis -->
                        </div>
                        <h3 class="text-lg font-semibold mb-2">{{ $features[3]->title }}</h3>
                        <p class="text-gray-600">{{ $features[3]->description }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Packages Section -->
        <section class="py-16 md:py-20 bg-white" id="layanan">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-4">
                    Pilihan Paket Internet
                </h2>
                <p class="text-center text-gray-600 mb-12">
                    Temukan paket yang sesuai dengan kebutuhan Anda
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    @forelse ($services as $service)
                        <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 package-card transition-all 
                            {{ $service->is_favorite ? 'transform scale-105 border-2 border-blue-500 relative' : '' }}"
                            data-aos="fade-up" data-aos-delay="75">
                            
                            @if($service->is_favorite)
                                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                    <span class="bg-blue-600 text-white px-4 py-1 rounded-full text-sm">
                                        MOST POPULAR
                                    </span>
                                </div>
                            @endif
        
                            <div class="text-center mb-6">
                                <span class="text-blue-600 font-semibold">{{ $service->label }}</span>
                                <h3 class="text-2xl md:text-3xl font-bold mt-2">{{ $service->name }}</h3>
                                <div class="mt-4">
                                    <span class="text-3xl md:text-4xl font-bold" x-text="'Rp' + new Intl.NumberFormat('id-ID').format({{ $service->price }})">
                                        Rp{{ number_format($service->price, 0, ',', '.') }}
                                    </span>
                                    <span class="text-gray-500">/bulan</span>
                                </div>
                            </div>
                            
                            <ul class="space-y-4 mb-8">
                                @foreach($service->features as $feature)
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                            
                            <button class="w-full bg-blue-600 text-white py-3 rounded-lg 
                                        hover:bg-blue-700 transition-colors">
                                Pilih Paket
                            </button>
                        </div>
                    @empty
                        <div class="col-span-4 text-center py-8">
                            <p class="text-gray-500">Tidak ada paket tersedia saat ini.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Additional Services Section -->
        <section class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-4">
                <!-- Section Header with enhanced styling -->
                <div class="max-w-3xl mx-auto text-center mb-16" data-aos="fade-up">
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider mb-2 block">Our Services</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Layanan Lainnya
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Solusi lengkap untuk kebutuhan teknologi dan digital Anda dengan standar kualitas tertinggi
                    </p>
                </div>
        
                <!-- Cards Container with improved layout -->
                <div class="max-w-5xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                        @forelse($additionalServices as $service)
                            <!-- Dynamic Service Card -->
                            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" 
                                data-aos="{{ $service->order % 2 == 0 ? 'fade-right' : 'fade-left' }}" 
                                data-aos-delay="{{ ($service->order + 1) * 100 }}">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="{{ asset('storage/' . $service->image) }}"
                                        alt="{{ $service->title }}"
                                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                                    <div class="absolute bottom-4 left-6 right-6">
                                        <span class="px-4 py-1 bg-blue-600 text-white text-sm font-medium rounded-full">
                                            {{ $service->badge }}
                                        </span>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $service->title }}</h3>
                                    <p class="text-gray-600 mb-6 leading-relaxed">
                                        {{ $service->description }}
                                    </p>
                                    <ul class="space-y-3 mb-8">
                                        @foreach(explode(',', $service->features) as $feature)
                                            <li class="flex items-center text-gray-700 hover:text-gray-900 transition-colors">
                                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                                <span>{{ trim($feature) }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @empty
                            <!-- Show default content when no services are found -->
                            <!-- Internet Service Provider Card -->
                            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" 
                                data-aos="fade-right" 
                                data-aos-delay="100">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=2670&auto=format&fit=crop"
                                        alt="Internet Service Provider"
                                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                                    <div class="absolute bottom-4 left-6 right-6">
                                        <span class="px-4 py-1 bg-blue-600 text-white text-sm font-medium rounded-full">
                                            Premium Service
                                        </span>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Internet Service Provider</h3>
                                    <p class="text-gray-600 mb-6 leading-relaxed">
                                        Layanan internet fiber premium dengan kecepatan tinggi dan stabilitas maksimal untuk rumah dan bisnis Anda.
                                    </p>
                                    <ul class="space-y-3 mb-8">
                                        <li class="flex items-center text-gray-700 hover:text-gray-900 transition-colors">
                                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                            <span>Fiber Optic Technology</span>
                                        </li>
                                        <li class="flex items-center text-gray-700 hover:text-gray-900 transition-colors">
                                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                            <span>24/7 Technical Support</span>
                                        </li>
                                        <li class="flex items-center text-gray-700 hover:text-gray-900 transition-colors">
                                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                            <span>99.9% Uptime Guarantee</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300">
                                        Pelajari Lebih Lanjut
                                        <i class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>
        
                            <!-- Software Development Card -->
                            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" 
                                data-aos="fade-left" 
                                data-aos-delay="200">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1503252947848-7338d3f92f31?q=80&w=2670&auto=format&fit=crop"
                                        alt="Software Development"
                                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                                    <div class="absolute bottom-4 left-6 right-6">
                                        <span class="px-4 py-1 bg-blue-600 text-white text-sm font-medium rounded-full">
                                            Custom Solutions
                                        </span>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Software Development</h3>
                                    <p class="text-gray-600 mb-6 leading-relaxed">
                                        Layanan pengembangan software kustom untuk memenuhi kebutuhan spesifik bisnis Anda dengan teknologi terkini.
                                    </p>
                                    <ul class="space-y-3 mb-8">
                                        <li class="flex items-center text-gray-700 hover:text-gray-900 transition-colors">
                                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                            <span>Custom Application Development</span>
                                        </li>
                                        <li class="flex items-center text-gray-700 hover:text-gray-900 transition-colors">
                                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                            <span>Web & Mobile Solutions</span>
                                        </li>
                                        <li class="flex items-center text-gray-700 hover:text-gray-900 transition-colors">
                                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                            <span>API Integration</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300">
                                        Pelajari Lebih Lanjut
                                        <i class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Section dengan Infinite Slider -->
        <section class="py-16 md:py-20 bg-white overflow-hidden">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-4">
                    Partner Kami
                </h2>
                <p class="text-center text-gray-600 mb-12">
                    Berkolaborasi dengan perusahaan teknologi terkemuka untuk memberikan layanan terbaik
                </p>
        
                @if(count($partners) > 0)
                    <!-- Slider Container -->
                    <div class="relative">
                        <!-- Dynamic Partner Slider -->
                        <div class="flex animate-scroll" data-aos="fade-left" data-aos-delay="100">
                            @foreach($partners as $partner)
                                <div class="flex items-center justify-center min-w-[200px] px-8">
                                    <img src="{{ asset('storage/' . $partner->image) }}" 
                                        alt="{{ $partner->name }}" 
                                        class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                                </div>
                            @endforeach
                            
                            <!-- Duplicate for seamless loop -->
                            @foreach($partners as $partner)
                                <div class="flex items-center justify-center min-w-[200px] px-8">
                                    <img src="{{ asset('storage/' . $partner->image) }}" 
                                        alt="{{ $partner->name }}" 
                                        class="max-h-12 object-contain grayscale hover:grayscale-0 transition-all">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <!-- Fallback if no partners are found -->
                    <div class="text-center text-gray-500 py-8">
                        <p>Partner akan segera hadir.</p>
                    </div>
                @endif
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-16 md:py-20 bg-gray-50 overflow-hidden">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-4">
                    Testimonial
                </h2>
                <p class="text-center text-gray-600 mb-12">
                    Apa kata mereka tentang layanan kami
                </p>

                <!-- Testimonial Slider Container -->
                <div class="relative">
                    <div class="flex testimonial-scroll">
                        @if($testimonials->count() > 0)
                            <!-- Original Testimonials -->
                            @foreach($testimonials->where('is_active', 1) as $testimonial)
                                <!-- Testimonial Card -->
                                <div class="min-w-[300px] md:min-w-[400px] px-6" data-aos="fade-left" data-aos-delay="100">
                                    <div class="bg-white rounded-xl p-8 relative">
                                        <div class="absolute -top-10 left-1/2 transform -translate-x-1/2">
                                            <img src="{{ asset('storage/'.$testimonial->image) }}"
                                                alt="{{ $testimonial->client_name }}"
                                                class="w-20 h-20 rounded-full border-4 border-white shadow-lg object-cover">
                                        </div>
                                        <div class="text-center pt-12">
                                            <p class="text-gray-600 italic mb-4">
                                                "{{ $testimonial->quote }}"
                                            </p>
                                            <h4 class="font-semibold text-lg">{{ $testimonial->client_name }}</h4>
                                            <p class="text-sm text-gray-500">{{ $testimonial->position }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <!-- Duplicate cards for infinite scroll -->
                            @foreach($testimonials->where('is_active', 1) as $testimonial)
                                <!-- Testimonial Card (Duplicate) -->
                                <div class="min-w-[300px] md:min-w-[400px] px-6" data-aos="fade-left" data-aos-delay="100">
                                    <div class="bg-white rounded-xl p-8 relative">
                                        <div class="absolute -top-10 left-1/2 transform -translate-x-1/2">
                                            <img src="{{ asset('storage/'.$testimonial->image) }}"
                                                alt="{{ $testimonial->client_name }}"
                                                class="w-20 h-20 rounded-full border-4 border-white shadow-lg object-cover">
                                        </div>
                                        <div class="text-center pt-12">
                                            <p class="text-gray-600 italic mb-4">
                                                "{{ $testimonial->quote }}"
                                            </p>
                                            <h4 class="font-semibold text-lg">{{ $testimonial->client_name }}</h4>
                                            <p class="text-sm text-gray-500">{{ $testimonial->position }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="w-full text-center py-8">
                                <p class="text-gray-500">Belum ada testimonial untuk ditampilkan</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-16 md:py-20 bg-white" id="FAQ">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-4">
                    Pertanyaan yang Sering Ditanyakan
                </h2>
                <p class="text-center text-gray-600 mb-12">
                    Temukan jawaban untuk pertanyaan yang sering diajukan
                </p>

                <!-- FAQ Container -->
                <div class="max-w-3xl mx-auto space-y-4">
                    @forelse($faqs as $faq)
                        <!-- FAQ Item -->
                        <div class="border border-gray-200 rounded-lg" data-aos="fade-up" data-aos-delay="50">
                            <button class="w-full flex items-center justify-between p-4 md:p-5 hover:bg-gray-50 transition-all" 
                                    onclick="toggleFAQ(this)">
                                <span class="font-semibold text-left">{{ $faq->question }}</span>
                                <i class="fas fa-chevron-down transform transition-transform"></i>
                            </button>
                            <div class="hidden px-4 pb-4 md:px-5 md:pb-5">
                                <p class="text-gray-600">
                                    {!! nl2br(e($faq->answer)) !!}
                                </p>
                            </div>
                        </div>
                    @empty
                        <!-- Display a message if no FAQs are found -->
                        <div class="text-center p-4 text-gray-500">
                            Belum ada pertanyaan yang tersedia saat ini.
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="kontak" class="py-16 md:py-20 md:px-10 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                    <!-- Contact Info -->
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold mb-6">Hubungi Kami</h2>
                        <p class="text-gray-600 mb-8">
                            Punya pertanyaan? Tim kami siap membantu Anda 24/7. Silakan hubungi 
                            kami melalui form di samping atau gunakan channel komunikasi di 
                            bawah ini.
                        </p>
                        
                        @if(isset($contact))
                        <div class="space-y-6">
                            <!-- Phone -->
                            <div class="flex items-start" data-aos="fade-right" data-aos-delay="50">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center 
                                        justify-center mr-5 flex-shrink-0">
                                    <i class="fas fa-phone text-blue-600 text-xl"></i>
                                </div>
                                <div class="pt-1">
                                    <h3 class="font-semibold text-lg mb-1">Telepon</h3>
                                    <p class="text-gray-600">{{ $contact->phone }}</p>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="flex items-start" data-aos="fade-right" data-aos-delay="50">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center 
                                        justify-center mr-5 flex-shrink-0">
                                    <i class="fas fa-envelope text-blue-600 text-xl"></i>
                                </div>
                                <div class="pt-1">
                                    <h3 class="font-semibold text-lg mb-1">Email</h3>
                                    <p class="text-gray-600">{{ $contact->email }}</p>
                                </div>
                            </div>
                            
                            <!-- Address -->
                            <div class="flex items-start" data-aos="fade-right" data-aos-delay="50">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center 
                                        justify-center mr-5 flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                                </div>
                                <div class="pt-1">
                                    <h3 class="font-semibold text-lg mb-1">Alamat</h3>
                                    <p class="text-gray-600">{{ $contact->address }}</p>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="text-gray-600">
                            Contact information not available.
                        </div>
                        @endif
                    </div>
                    
                    <!-- Contact Form -->
                    <div data-aos="fade-up" data-aos-delay="50">
                        <form class="bg-gray-50 p-6 md:p-8 rounded-xl shadow-lg">
                            <div class="space-y-6">
                                <!-- Name Field -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Nama Lengkap
                                    </label>
                                    <input type="text" 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 
                                                focus:ring-2 focus:ring-blue-600 
                                                focus:border-transparent transition-all"
                                        placeholder="Masukkan nama lengkap Anda">
                                </div>
                                
                                <!-- Email Field -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Email
                                    </label>
                                    <input type="email" 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 
                                                focus:ring-2 focus:ring-blue-600 
                                                focus:border-transparent transition-all"
                                        placeholder="email@example.com">
                                </div>
                                
                                <!-- Phone Field -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Nomor Telepon
                                    </label>
                                    <input type="tel" 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 
                                                focus:ring-2 focus:ring-blue-600 
                                                focus:border-transparent transition-all"
                                        placeholder="08xxxxxxxxxx">
                                </div>
                                
                                <!-- Message Field -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Pesan
                                    </label>
                                    <textarea 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 
                                            focus:ring-2 focus:ring-blue-600 
                                            focus:border-transparent transition-all"
                                        rows="4"
                                        placeholder="Tuliskan pesan Anda di sini...">
                                    </textarea>
                                </div>
                                
                                <!-- Submit Button -->
                                <button type="submit" 
                                        class="w-full bg-blue-600 text-white py-3 rounded-lg 
                                            hover:bg-blue-700 transition-colors">
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12" id="dukungan">
            <div class="container mx-auto px-4">
                <!-- Footer Content Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Multimedia Link Technology</h4>
                        <p class="text-gray-400">
                            Penyedia layanan internet fiber premium dengan kualitas terbaik 
                            untuk rumah dan bisnis Anda.
                        </p>
                    </div>
                    
                    <!-- Quick Links -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li>
                                <a href="#" class="hover:text-white transition-colors">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition-colors">
                                    Paket Internet
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition-colors">
                                    Area Coverage
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition-colors">
                                    Support
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Support Links -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Support</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li>
                                <a href="#" class="hover:text-white transition-colors">
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition-colors">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition-colors">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition-colors">
                                    Terms of Service
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Social Media -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" 
                               class="w-10 h-10 bg-gray-800 rounded-full flex items-center 
                                      justify-center hover:bg-blue-600 transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" 
                               class="w-10 h-10 bg-gray-800 rounded-full flex items-center 
                                      justify-center hover:bg-blue-400 transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" 
                               class="w-10 h-10 bg-gray-800 rounded-full flex items-center 
                                      justify-center hover:bg-pink-600 transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" 
                               class="w-10 h-10 bg-gray-800 rounded-full flex items-center 
                                      justify-center hover:bg-blue-700 transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Copyright -->
                <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                    <p>&copy; 2025 Multimedia Link Technology. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <script src="{{ asset('assets/js/slider.js') }}"></script>
        <script>
            function toggleFAQ(element) {
                // Toggle active state
                element.classList.toggle('active');
                
                // Get the content panel
                const content = element.nextElementSibling;
                
                // Toggle the chevron icon
                const icon = element.querySelector('.fa-chevron-down');
                icon.style.transform = content.classList.contains('hidden') ? 'rotate(180deg)' : 'rotate(0)';
                
                // Toggle the content visibility
                content.classList.toggle('hidden');
                
                // Close other FAQs
                const allFAQs = document.querySelectorAll('.border.border-gray-200.rounded-lg');
                allFAQs.forEach(faq => {
                    const faqButton = faq.querySelector('button');
                    const faqContent = faq.querySelector('div[class*="hidden"]');
                    const faqIcon = faq.querySelector('.fa-chevron-down');
                    
                    if (faqButton !== element && faqContent) {
                        faqContent.classList.add('hidden');
                        faqIcon.style.transform = 'rotate(0)';
                        faqButton.classList.remove('active');
                    }
                });
            }
            </script>
            <!-- Di bagian akhir body -->
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-in-out'
            });
            </script>
    </body>
</html>