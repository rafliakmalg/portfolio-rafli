<!-- resources/views/components/navbar.blade.php -->
<nav id="navbar" role="navigation"
    class="sticky top-0 z-50 bg-white/80 backdrop-blur-sm translate-y-0 opacity-100 transition-all duration-500 border-b border-gray-100">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center max-w-screen-lg">
        <!-- Logo/Brand -->
        <a href="{{ url('/') }}" class="flex items-center space-x-2 text-2xl font-bold text-gray-800"
            aria-label="Home">
            <!-- Optional: Add your logo image here -->
            <span class="text-emerald-500">Rafli</span>
            <span>Portfolio</span>
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-8">
            <ul class="flex space-x-8">
                <li>
                    <a href="#about"
                        class="text-gray-600 hover:text-emerald-500 transition-colors duration-300 py-2 border-b-2 border-transparent hover:border-emerald-500">
                        About
                    </a>
                </li>
                <li>
                    <a href="#projects"
                        class="text-gray-600 hover:text-emerald-500 transition-colors duration-300 py-2 border-b-2 border-transparent hover:border-emerald-500">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#education-experience"
                        class="text-gray-600 hover:text-emerald-500 transition-colors duration-300 py-2 border-b-2 border-transparent hover:border-emerald-500">
                        Education
                    </a>
                </li>
                <li>
                    <a href="#education-experience"
                        class="text-gray-600 hover:text-emerald-500 transition-colors duration-300 py-2 border-b-2 border-transparent hover:border-emerald-500">
                        Experience
                    </a>
                </li>
                <li>
                    <a href="#certifications"
                        class="text-gray-600 hover:text-emerald-500 transition-colors duration-300 py-2 border-b-2 border-transparent hover:border-emerald-500">
                        Certification
                    </a>
                </li>
                <li>
                    <a href="#contact"
                        class="text-gray-600 hover:text-emerald-500 transition-colors duration-300 py-2 border-b-2 border-transparent hover:border-emerald-500">
                        Contact
                    </a>
                </li>
            </ul>
            <a href="#contact"
                class="inline-flex items-center px-4 py-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded-full transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg">
                Let's Talk
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" type="button" aria-label="Toggle navigation" aria-expanded="false"
            class="md:hidden p-2 rounded-lg text-gray-600 hover:text-emerald-500 hover:bg-emerald-50 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition-colors duration-300">
            <svg id="hamburger-icon" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-100">
        <div class="container mx-auto px-4 py-4 space-y-4">
            {{-- <a href="#home" class="block px-4 py-2 text-gray-600 hover:text-emerald-500 hover:bg-emerald-50 rounded-lg transition-colors duration-300">Home</a> --}}
            <a href="#about"
                class="block px-4 py-2 text-gray-600 hover:text-emerald-500 hover:bg-emerald-50 rounded-lg transition-colors duration-300">About</a>
            <a href="#projects"
                class="block px-4 py-2 text-gray-600 hover:text-emerald-500 hover:bg-emerald-50 rounded-lg transition-colors duration-300">Projects</a>
            <a href="#education-experience"
                class="block px-4 py-2 text-gray-600 hover:text-emerald-500 hover:bg-emerald-50 rounded-lg transition-colors duration-300">Education</a>
            <a href="#education-experience"
                class="block px-4 py-2 text-gray-600 hover:text-emerald-500 hover:bg-emerald-50 rounded-lg transition-colors duration-300">Experience</a>
                <a href="#certifications"
                class="block px-4 py-2 text-gray-600 hover:text-emerald-500 hover:bg-emerald-50 rounded-lg transition-colors duration-300">Certification</a>
            <a href="#contact"
                class="block px-4 py-2 text-gray-600 hover:text-emerald-500 hover:bg-emerald-50 rounded-lg transition-colors duration-300">Contact</a>
            <a href="#contact"
                class="block px-4 py-2 text-center bg-emerald-500 hover:bg-emerald-600 text-white rounded-lg transition-colors duration-300">
                Let's Talk
            </a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        // SVG icons for toggle states
        const hamburgerIcon =
            '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>';
        const closeIcon =
            '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';

        // Handle mobile menu toggle
        mobileMenuButton.addEventListener('click', function() {
            const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
            mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
            mobileMenuButton.innerHTML = !isExpanded ? closeIcon : hamburgerIcon;
        });

        // Handle scroll behavior
        let lastScrollTop = 0;
        let scrollDelta = 10;
        let navbarHeight = navbar.offsetHeight;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            // Scroll threshold check
            if (Math.abs(lastScrollTop - currentScroll) <= scrollDelta) {
                return;
            }

            // Add shadow when scrolled
            if (currentScroll > 0) {
                navbar.classList.add('shadow-md');
            } else {
                navbar.classList.remove('shadow-md');
            }

            // Show/hide navbar based on scroll direction
            if (currentScroll > lastScrollTop && currentScroll > navbarHeight) {
                // Scrolling down
                navbar.classList.remove('translate-y-0', 'opacity-100');
                navbar.classList.add('-translate-y-full', 'opacity-0');
            } else {
                // Scrolling up
                navbar.classList.remove('-translate-y-full', 'opacity-0');
                navbar.classList.add('translate-y-0', 'opacity-100');
            }

            lastScrollTop = currentScroll;
        }, false);

        // Close mobile menu on link click
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
                mobileMenuButton.innerHTML = hamburgerIcon;
            });
        });
    });
</script>
