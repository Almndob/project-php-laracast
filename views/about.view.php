<?php include "partials/head.php"; ?>
<?php include "partials/nav.php"; ?>
<?php include "partials/banner.php"; ?>

<main class="bg-gray-50">

    <!-- Hero Section -->
    <section class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
                🌟 About Our Notes App
            </h1>
            <p class="text-gray-600 text-lg md:text-xl max-w-2xl mx-auto">
                Organize your thoughts, manage ideas efficiently, and keep everything secure and accessible across all devices.
            </p>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h2>
                <p class="text-gray-700 mb-6">
                    To provide a simple, secure, and powerful platform for managing your notes efficiently.  
                    We help users stay organized, save time, and focus on what matters most.
                </p>

                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Vision</h2>
                <p class="text-gray-700 mb-6">
                    To become the most user-friendly and trusted note-taking platform worldwide,  
                    ensuring seamless experience across all devices.
                </p>
            </div>
            <div class="flex justify-center">
                <img src="/assets/images/mission-illustration.png" alt="Mission Illustration"
                     class="rounded-2xl shadow-lg w-full max-w-md">
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-6xl mx-auto px-6 text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Meet Our Team</h2>
            <p class="text-gray-600 mt-2">Dedicated professionals who make everything possible.</p>
        </div>

        <div class="max-w-6xl mx-auto px-6 grid sm:grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <img src="/assets/images/team1.jpg" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Mohamed Ali</h3>
                <p class="text-gray-600 text-sm">Full Stack Developer</p>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <img src="/assets/images/team2.jpg" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Sara Ahmed</h3>
                <p class="text-gray-600 text-sm">UI/UX Designer</p>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <img src="/assets/images/team3.jpg" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Ali Hassan</h3>
                <p class="text-gray-600 text-sm">Backend Engineer</p>
            </div>

            <!-- Team Member 4 -->
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <img src="/assets/images/team4.jpg" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Lina Omar</h3>
                <p class="text-gray-600 text-sm">Product Manager</p>
            </div>
        </div>
    </section>

    <!-- Stats / Achievements -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-8 text-center">
            <div>
                <h3 class="text-4xl font-bold text-blue-600">1.2K+</h3>
                <p class="text-gray-600 mt-2">Notes Created</p>
            </div>
            <div>
                <h3 class="text-4xl font-bold text-blue-600">500+</h3>
                <p class="text-gray-600 mt-2">Active Users</p>
            </div>
            <div>
                <h3 class="text-4xl font-bold text-blue-600">24/7</h3>
                <p class="text-gray-600 mt-2">Support</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-6xl mx-auto px-6 text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">What Our Users Say</h2>
        </div>

        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <p class="text-gray-700 mb-4">
                    "This app makes note-taking so easy! I can organize everything in one place."
                </p>
                <h3 class="text-gray-800 font-semibold">Ahmed Samir</h3>
                <p class="text-gray-500 text-sm">Designer</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <p class="text-gray-700 mb-4">
                    "Intuitive interface and great performance. Highly recommended!"
                </p>
                <h3 class="text-gray-800 font-semibold">Mona Khaled</h3>
                <p class="text-gray-500 text-sm">Developer</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <p class="text-gray-700 mb-4">
                    "Secure, fast, and reliable. This app has transformed how I work daily."
                </p>
                <h3 class="text-gray-800 font-semibold">Omar Farouk</h3>
                <p class="text-gray-500 text-sm">Product Manager</p>
            </div>
        </div>
    </section>

</main>

<?php include "partials/footer.php"; ?>