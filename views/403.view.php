<?php include "partials/head.php"; ?>
<?php include "partials/nav.php"; ?>

<main class="min-h-screen flex flex-col justify-center items-center bg-gray-50 px-4">

    <!-- Error Code / Icon -->
    <h1 class="text-6xl md:text-8xl font-extrabold text-red-200 mb-6">
        ⚠️
    </h1>

    <!-- Message -->
    <p class="text-2xl md:text-3xl font-semibold text-gray-800 mb-4 text-center">
        You are not authorized to view this page
    </p>

    <p class="text-gray-600 mb-8 text-center max-w-md">
        You do not have permission to access this page. Please contact the administrator if you believe this is a mistake.
    </p>

    <!-- Button -->
    <a href="/lara-cast"
       class="inline-block bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow hover:bg-blue-700 transition transform hover:-translate-y-1">
        Go Back Home
    </a>

    <!-- Optional Illustration -->
    <div class="mt-12">
        <img src="/assets/images/unauthorized-illustration.png" alt="Unauthorized Illustration" class="w-96 max-w-full">
    </div>

</main>

<?php include "partials/footer.php"; ?>