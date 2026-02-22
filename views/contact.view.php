<?php include "partials/head.php"; ?>
<?php include "partials/nav.php"; ?>
<?php include "partials/banner.php"; ?>

<main class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-4xl mx-auto px-6">

        <!-- Header -->
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">
                📩 Contact Us
            </h1>
            <p class="text-gray-600">
                Have a question or feedback? Send us a message and we’ll get back to you.
            </p>
        </div>

        <!-- Contact Card -->
        <div class="bg-white shadow-xl rounded-2xl p-8 border border-gray-100">

            <form method="POST" action="#" class="space-y-6">

                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Your Name
                    </label>
                    <input type="text" name="name"
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Your Email
                    </label>
                    <input type="email" name="email"
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Message -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Message
                    </label>
                    <textarea name="message" rows="5"
                              class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                </div>

                <!-- Button -->
                <div class="text-right">
                    <button type="submit"
                            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition shadow">
                        Send Message
                    </button>
                </div>

            </form>

        </div>

    </div>
</main>

<?php include "partials/footer.php"; ?>