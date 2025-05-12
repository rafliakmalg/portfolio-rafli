<!-- Hero Section -->
<div id="about" class="relative bg-gradient-to-b from-lime-50 to-lime-100 pt-16 overflow-hidden min-h-screen">
    <!-- Flex Container for Desktop Layout -->
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between max-w-screen-xl">
        <!-- Main Content Container -->
        <div
            class="w-full md:w-3/5 mb-10 md:mb-0 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out relative z-10">
            <!-- Heading -->
            <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-6 leading-tight text-center md:text-left">
                <span class="block">Welcome to</span>
                <span class="block text-emerald-500">Rafli Akmal Gunawan's</span>
                <span class="block">Portfolio</span>
            </h1>

            <!-- Subheading -->
            <p class="text-lg md:text-xl text-gray-600 max-w-2xl mb-8 leading-relaxed text-center md:text-left mx-auto md:mx-0">
                Software Developer specializing in ERP system development and full-stack web applications. Experienced in building scalable business solutions, automating workflows, and managing Linux-based environments to enhance operational efficiency.
            </p>

            <div class="flex flex-wrap justify-center md:justify-start gap-4 mb-10">
                <div class="flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full shadow-sm">
                    <i class="fa-brands fa-laravel text-emerald-500"></i>
                    <span class="text-gray-700">Laravel</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full shadow-sm">
                    <i class="fa-solid fa-database text-emerald-500"></i>
                    <span class="text-gray-700">SQL</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full shadow-sm">
                    <i class="fa-brands fa-linux text-emerald-500"></i>
                    <span class="text-gray-700">Linux</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full shadow-sm">
                    <i class="fa-solid fa-server text-emerald-500"></i>
                    <span class="text-gray-700">System Admin</span>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-wrap justify-center md:justify-start gap-4">
                <a href="#projects"
                    class="inline-flex items-center px-8 py-3 bg-emerald-500 hover:bg-emerald-600 text-white font-semibold rounded-full transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    View Projects
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </a>
                <a href="#contact"
                    class="inline-flex items-center px-8 py-3 bg-white hover:bg-gray-50 text-gray-800 font-semibold rounded-full transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 border-2 border-gray-200">
                    Contact Me
                </a>
            </div>
        </div>

        <!-- Image Container - Right side on desktop, bottom on mobile -->
        <div
            class="w-full md:w-2/5 animate-on-scroll opacity-0 translate-y-10 transition-all duration-700 ease-out delay-200">
            {{-- <div class="relative">
                <!-- Optional: Add a subtle gradient overlay -->
                <div class="absolute bottom-0 left-0 right-0 h-full bg-gradient-to-t from-lime-100 to-transparent z-20"></div>
                <img src="{{ asset('img/nabila-full-body.png') }}" alt="Nabila Lailinajma"
                    class="w-full max-w-md sm:max-w-lg mx-auto z-0" />
            </div> --}}
            <div class="relative">
                <img src="{{ asset('img/rafli-half-body.png') }}" alt="Nabila Lailinajma"
                    class="w-full max-w-md sm:max-w-lg mx-auto relative z-0" />
            </div>
        </div>


    </div>
</div>

<!-- Keep your existing animation script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                } else {
                    entry.target.classList.add('opacity-0', 'translate-y-10');
                    entry.target.classList.remove('opacity-100', 'translate-y-0');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    });
</script>
