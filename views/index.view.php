<?php include "partials/head.php"; ?>
<?php include "partials/nav.php"; ?>
<?php include "partials/banner.php"; ?>

<main class="min-h-screen bg-gray-50">

    <!-- Hero Section -->
    <section class="bg-white">
        <div class="max-w-6xl mx-auto px-6 py-20 text-center">

            <h1 class="text-4xl font-extrabold text-gray-900 mb-6">
                📝 Welcome to Your Notes App
            </h1>

            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Organize your thoughts, manage your ideas, and keep everything in one simple and powerful place.
            </p>

            <div class="flex justify-center gap-4">
                <a href="/lara-cast/notes"
                   class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                    View Notes
                </a>

                <a href="/lara-cast/notes/create"
                   class="px-6 py-3 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition">
                    Create Note
                </a>
            </div>

        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-8">

            <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-4">⚡ Fast</h3>
                <p class="text-gray-600">
                    Create and manage notes instantly with a clean and responsive interface.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-4">🔒 Secure</h3>
                <p class="text-gray-600">
                    Your notes are protected and linked to your personal account.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-4">📱 Responsive</h3>
                <p class="text-gray-600">
                    Works beautifully on desktop, tablet, and mobile devices.
                </p>
            </div>

        </div>
    </section>

</main>

<?php include "partials/footer.php"; ?>