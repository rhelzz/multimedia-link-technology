<!-- Mobile Navigation -->
<nav class="md:hidden fixed bottom-0 left-0 right-0 bg-white shadow-[0_-2px_10px_rgba(0,0,0,0.1)] z-50">
    <div class="flex justify-around items-center p-2">  <!-- Mengurangi padding dari p-4 menjadi p-2 -->
        <!-- Home -->
        <a href="#" class="flex flex-col items-center text-gray-600 hover:text-blue-600">
            <i class="fas fa-home text-lg"></i> <!-- Mengurangi ukuran icon dari text-xl menjadi text-lg -->
            <span class="text-[10px] mt-0.5">Home</span> <!-- Mengurangi ukuran text dan margin top -->
        </a>
        
        <!-- Paket -->
        <a href="#layanan" class="flex flex-col items-center text-gray-600 hover:text-blue-600">
            <i class="fas fa-briefcase text-lg"></i> <!-- Mengurangi ukuran icon -->
            <span class="text-[10px] mt-0.5">Layanan</span> <!-- Mengurangi ukuran text -->
        </a>
        
        <!-- Menu Button (Center) -->
        <button id="mobileMenuBtn" class="flex flex-col items-center -mt-6 relative"> <!-- Mengurangi margin top -->
            <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center shadow-lg text-white"> <!-- Mengurangi ukuran button -->
                <i class="fas fa-bars text-lg"></i> <!-- Mengurangi ukuran icon -->
            </div>
            <span class="text-[10px] mt-0.5">Menu</span> <!-- Mengurangi ukuran text -->
        </button>
        
        <!-- Area -->
        <a href="#lokasi" class="flex flex-col items-center text-gray-600 hover:text-blue-600">
            <i class="fas fa-map-marker-alt text-lg"></i> <!-- Mengurangi ukuran icon -->
            <span class="text-[10px] mt-0.5">Area</span> <!-- Mengurangi ukuran text -->
        </a>
        
        <!-- Contact -->
        <a href="#kontak" class="flex flex-col items-center text-gray-600 hover:text-blue-600">
            <i class="fas fa-headset text-lg"></i> <!-- Mengurangi ukuran icon -->
            <span class="text-[10px] mt-0.5">Kontak</span> <!-- Mengurangi ukuran text -->
        </a>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobileMenuOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
    <div class="fixed bottom-20 left-4 right-4 bg-white rounded-xl shadow-xl p-3 transform transition-transform duration-300 translate-y-full"> <!-- Mengurangi padding dan jarak dari bottom -->
        <div class="grid grid-cols-3 gap-3"> <!-- Mengurangi gap -->
            <!-- Menu Items -->
            <a href="#" class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600"> <!-- Mengurangi padding -->
                <i class="fas fa-tag text-lg mb-1"></i> <!-- Mengurangi ukuran icon dan margin -->
                <span class="text-xs">Promo</span> <!-- Mengurangi ukuran text -->
            </a>
            <a href="#dukungan" class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600">
                <i class="fas fa-question-circle text-lg mb-1"></i>
                <span class="text-xs">Bantuan</span>
            </a>
            <a href="#member" class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600">
                <i class="fas fa-user text-lg mb-1"></i>
                <span class="text-xs">Member</span>
            </a>
            <a href="#FAQ" class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600">
                <i class="fas fa-info-circle text-lg mb-1"></i>
                <span class="text-xs">FAQ</span>
            </a>
            <a href="#privacy" class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600">
                <i class="fas fa-shield-alt text-lg mb-1"></i>
                <span class="text-xs">Privacy</span>
            </a>
            <a href="#terms" class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600">
                <i class="fas fa-file-contract text-lg mb-1"></i>
                <span class="text-xs">Terms</span>
            </a>
        </div>
    </div>
</div>

<script>
    // Mobile Bottom Navigation Menu Handler
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
        const menuContent = mobileMenuOverlay.querySelector('div.bg-white');
        
        // Function to open menu
        function openMenu() {
            mobileMenuOverlay.classList.remove('hidden');
            // Reset the transform first to trigger the animation
            menuContent.style.transform = 'translateY(100%)';
            setTimeout(() => {
                menuContent.style.transform = 'translateY(0)';
            }, 10);
        }
        
        // Function to close menu
        function closeMenu() {
            menuContent.style.transform = 'translateY(100%)';
            setTimeout(() => {
                mobileMenuOverlay.classList.add('hidden');
            }, 300);
        }
        
        // Toggle menu on button click
        mobileMenuBtn.addEventListener('click', function() {
            if (mobileMenuOverlay.classList.contains('hidden')) {
                openMenu();
            } else {
                closeMenu();
            }
        });
        
        // Close menu when clicking overlay
        mobileMenuOverlay.addEventListener('click', function(e) {
            if (e.target === mobileMenuOverlay) {
                closeMenu();
            }
        });
        
        // Prevent scroll when menu is open
        mobileMenuOverlay.addEventListener('touchmove', function(e) {
            e.preventDefault();
        }, { passive: false });
        
        // Close menu on menu item click
        const menuItems = mobileMenuOverlay.querySelectorAll('a');
        menuItems.forEach(item => {
            item.addEventListener('click', closeMenu);
        });
    });
</script>