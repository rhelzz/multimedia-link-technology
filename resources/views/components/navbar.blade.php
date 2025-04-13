<!-- Navigation -->
<header class="navbar-fixed fixed top-0 w-full z-50 hidden md:block" id="navbar">
    <!-- Add hidden md:block class to hide on mobile and show on desktop -->
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="https://placehold.co/40x40/0066ff/ffffff?text=M" 
                    alt="Multimedia Link Technology Logo" 
                    class="h-8 w-8 sm:h-10 sm:w-10 rounded-lg">
                <span class="nav-brand text-xl sm:text-2xl font-bold text-white ml-3">
                    Multimedia Link Technology
                </span>
            </div>

            <!-- Navigation Menu -->
            <nav id="navMenu" class="hidden md:flex items-center">
                <div class="flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0">
                    <div class="md:flex md:items-center md:space-x-5"> <!-- Mengubah space-x-8 menjadi space-x-5 -->
                        <a href="#" 
                        class="nav-link relative text-gray-800 md:text-white 
                                hover:text-orange-500 transition-colors px-3 py-2">
                            <i class="fas fa-tag mr-2"></i>Promo
                        </a>
                        <a href="#layanan" 
                        class="nav-link relative text-gray-800 md:text-white 
                                hover:text-orange-500 transition-colors px-3 py-2">
                            <i class="fas fa-briefcase mr-2"></i>Layanan
                        </a>
                        <a href="#" 
                        class="nav-link relative text-gray-800 md:text-white 
                                hover:text-orange-500 transition-colors px-3 py-2">
                            <i class="fas fa-map-marker-alt mr-2"></i>Lokasi Area
                        </a>
                        <a href="#dukungan" 
                        class="nav-link relative text-gray-800 md:text-white 
                                hover:text-orange-500 transition-colors px-3 py-2">
                            <i class="fas fa-headset mr-2"></i>Bantuan & Dukungan
                        </a>
                        <a href="#kontak" 
                        class="nav-link relative text-gray-800 md:text-white 
                                hover:text-orange-500 transition-colors px-3 py-2">
                            <i class="fa-solid fa-address-book mr-2"></i>Kontak
                        </a>
                        <a href="#member" 
                        class="bg-orange-500 text-white px-6 py-2 rounded-full 
                                hover:bg-orange-600 transition-colors ml-3 inline-flex items-center">
                            <!-- Mengubah padding dan margin -->
                            <i class="fas fa-user mr-2"></i>My Member
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Mobile Menu Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        const heroSection = document.querySelector('section');
        const memberButton = document.querySelector('a[href="#member"]');
        
        // Handle scroll untuk navbar desktop
        function handleScroll() {
            const heroHeight = heroSection.offsetHeight;
            const scrollPosition = window.pageYOffset;
            const threshold = heroHeight * 0.125;

            if (scrollPosition > threshold) {
                navbar.classList.add('scrolled');
                // Ubah warna nav links
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('md:text-white', 'text-gray-800');
                    link.classList.add('text-blue-600');
                    link.style.color = '#2563eb';
                });
                // Ubah warna brand
                document.querySelector('.nav-brand').classList.remove('text-white');
                document.querySelector('.nav-brand').classList.add('text-blue-600');
                
                // Ubah warna member area button
                memberButton.classList.remove('bg-orange-500', 'hover:bg-orange-600');
                memberButton.classList.add('bg-blue-600', 'hover:bg-blue-700');
            } else {
                navbar.classList.remove('scrolled');
                // Kembalikan warna nav links
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.add('md:text-white');
                    link.classList.remove('text-blue-600');
                    link.style.removeProperty('color');
                });
                // Kembalikan warna brand
                document.querySelector('.nav-brand').classList.add('text-white');
                document.querySelector('.nav-brand').classList.remove('text-blue-600');
                
                // Kembalikan warna member area button
                memberButton.classList.add('bg-orange-500', 'hover:bg-orange-600');
                memberButton.classList.remove('bg-blue-600', 'hover:bg-blue-700');
            }
        }

        // Listen for scroll and resize events
        window.addEventListener('scroll', handleScroll);
        window.addEventListener('resize', handleScroll);
        
        // Initial check
        handleScroll();
    });
</script>