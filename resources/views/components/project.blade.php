<!-- resources/views/components/project-section.blade.php -->
<section id="projects" class="py-20 bg-lime-100 h-min-screen">
    <div class="container mx-auto px-4 max-w-screen-lg">
        <!-- Section Header -->
        <div class="text-center mb-16 opacity-0 project-animate" data-animation="fade-down">
            <span class="text-emerald-500 font-medium">My Work</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Featured Projects</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Explore my portfolio of data-driven projects, where I transform complex datasets into meaningful
                insights and solutions.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projects as $index => $project)
                <!-- Project Card -->
                <article
                    class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-500 opacity-0 project-animate"
                    data-animation="fade-up" data-delay="{{ $index * 200 }}">
                    <div class="relative group">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                            class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" />
                        <div class="absolute top-4 left-4">
                            <span
                                class="px-3 py-1 bg-emerald-500 text-white text-sm rounded-full">{{ $project['category'] }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            {{ $project['title'] }}
                        </h3>
                        <p class="text-gray-600 mb-4">
                            {{ $project['description'] }}
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach ($project['tags'] as $tag)
                                <span
                                    class="px-2 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">{{ $tag }}</span>
                            @endforeach
                        </div>
                        @if ($project['link'])    
                        <a href="{{ $project['link'] }}" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center text-emerald-500 hover:text-emerald-600 transition-all duration-300 hover:translate-x-2">
                            View Project
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<style>
    .project-animate {
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .project-animate[data-animation="fade-up"] {
        transform: translateY(50px);
    }

    .project-animate[data-animation="fade-down"] {
        transform: translateY(-50px);
    }

    .project-animate.animate {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '50px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const delay = element.getAttribute('data-delay') || 0;

                    setTimeout(() => {
                        element.classList.add('animate');
                    }, delay);

                    // Unobserve after animation
                    observer.unobserve(element);
                }
            });
        }, observerOptions);

        // Observe all elements with project-animate class
        document.querySelectorAll('.project-animate').forEach(element => {
            observer.observe(element);
        });
    });
</script>
