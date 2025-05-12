<section id="contact" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-screen-lg">
        <!-- Section Header -->
        <div
            class="text-center mb-16 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out">
            <span class="text-emerald-500 font-medium">Get in Touch</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Contact Me</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                I'm based in Jakarta Utara, Indonesia. Whether you have a project in mind or just want to say hi, feel
                free to reach out!
            </p>
        </div>

        <!-- Contact Details & Form -->
        <div class="flex flex-col md:flex-row gap-8 justify-center items-start">
            <!-- Contact Information Card -->
            <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out w-full md:w-1/2 text-center">
                <div class="p-8 flex flex-col items-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Contact Information</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center justify-center">
                            <i class="fa-solid fa-location-dot text-emerald-500 mr-3"></i>
                            <span class="text-gray-700">Jakarta Utara, Indonesia</span>
                        </li>
                        <li class="flex items-center justify-center">
                            <i class="fa-brands fa-linkedin text-emerald-500 mr-3"></i>
                            <a href="https://www.linkedin.com/in/rafliakmalg/" target="_blank"
                                class="text-emerald-500 hover:underline">linkedin.com/in/rafliakmalg</a>
                        </li>
                        <li class="flex items-center justify-center">
                            <i class="fa-solid fa-envelope text-emerald-500 mr-3"></i>
                            <a href="mailto:rafliakmalg@gmail.com"
                                class="text-emerald-500 hover:underline">rafliakmalg@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div
                class="bg-white rounded-2xl shadow-lg p-8 w-full md:w-1/2 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out">
                <h3 class="text-xl font-bold text-gray-900 mb-6 text-center">Contact Form</h3>
                <div id="form-alert" class="hidden mt-4 p-4 rounded text-white bg-emerald-500 text-center">
                    Your message has been sent successfully!
                </div>                
                <form id="contact-form" action="https://formspree.io/f/manwbnao" method="POST" class="space-y-4">
                    <input type="text" name="fullname"
                        class="form-input w-full border border-gray-300 rounded px-4 py-2" placeholder="Full name"
                        required>
                    <input type="email" name="email"
                        class="form-input w-full border border-gray-300 rounded px-4 py-2" placeholder="Email address"
                        required>
                    <textarea name="message" rows="5" class="form-input w-full border border-gray-300 rounded px-4 py-2"
                        placeholder="Your Message" required></textarea>

                    <!-- Honeypot field -->
                    <input type="text" name="_honeypot" style="display:none">

                    <button type="submit"
                        class="form-btn w-full bg-emerald-500 text-white py-2 rounded hover:bg-emerald-600 transition-all flex items-center justify-center gap-2">
                        <ion-icon name="paper-plane"></ion-icon>
                        <span>Send Message</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contact-form');
        const alertBox = document.getElementById('form-alert');

        form.addEventListener('submit', async function (e) {
            e.preventDefault(); // Stop default reload

            const formData = new FormData(form);

            // Optional: Disable button while submitting
            const submitBtn = form.querySelector('button[type="submit"]');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Sending...</span>';

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                if (response.ok) {
                    alertBox.classList.remove('hidden');
                    form.reset();
                } else {
                    alertBox.textContent = 'Oops! Something went wrong.';
                    alertBox.classList.remove('hidden');
                    alertBox.classList.replace('bg-green-500', 'bg-red-500');
                }
            } catch (error) {
                alertBox.textContent = 'Network error. Please try again later.';
                alertBox.classList.remove('hidden');
                alertBox.classList.replace('bg-green-500', 'bg-red-500');
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<ion-icon name="paper-plane"></ion-icon><span>Send Message</span>';
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
    });
</script>
