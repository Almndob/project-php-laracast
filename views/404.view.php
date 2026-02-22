<?php include "partials/head.php"; ?>
<?php include "partials/nav.php"; ?>

<main class="min-h-screen flex flex-col justify-center items-center bg-gray-50 px-4">

    <!-- Error Code -->
    <h1 class="text-9xl font-extrabold text-gray-200 mb-6">
        404
    </h1>

    <!-- Message -->
    <p class="text-2xl md:text-3xl font-semibold text-gray-800 mb-4 text-center">
        Oops! The page you are looking for does not exist.
    </p>

    <p class="text-gray-600 mb-8 text-center max-w-md">
        It might have been moved or deleted. Let's get you back to safety.
    </p>

    <!-- Button -->
    <a href="/lara-cast"
       class="inline-block bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow hover:bg-blue-700 transition transform hover:-translate-y-1">
        Go Back Home
    </a>

    <!-- Optional Illustration -->
    <div class="mt-12">
        <img src="/assets/images/404-illustration.png" alt="404 Illustration" class="w-96 max-w-full">
    </div>

</main>

<?php include "partials/footer.php"; ?>