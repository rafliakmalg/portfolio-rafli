<!-- File: resources/views/components/certification.blade.php -->
<section id="certifications" class="py-10 md:py-20 bg-white">
    <div class="container my-auto mx-auto px-4 max-w-screen-lg">
        <div class="text-center my-4 md:my-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Certifications</h2>
            <p class="text-gray-600 mt-4">My <span class="text-emerald-500">Professional Certifications</span></p>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper ">
                @foreach ($certifications as $certification)
                    <div class="swiper-slide mb-12 ">
                        <div class="bg-gray-100 rounded-lg shadow p-4 ">
                            <div class="relative group">
                                <img src="{{ asset('img/certificates/' . $certification['image']) }}" alt="{{ $certification['title'] }}" class="w-full h-auto rounded">
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-3 py-1 bg-emerald-500 text-white text-sm rounded-full">{{ $certification['issued_by'] ?? '' }}</span>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <h3 class="text-xl font-semibold text-gray-900">{!! $certification['title'] !!}</h3>
                                <p class="text-gray-500">{{ $certification['year'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination mt-6"></div>
        </div>
    </div>
</section>
