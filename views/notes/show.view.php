<?php require (__DIR__.'/../partials/head.php') ; ?>
<?php require (__DIR__.'/../partials/nav.php') ; ?>
<?php require (__DIR__.'/../partials/banner.php') ; ?>

<main class="min-h-screen bg-gray-50 py-10">
    <div class="max-w-3xl mx-auto px-6">

        <!-- Card -->
        <div class="bg-white shadow-xl rounded-2xl p-8 border border-gray-100">

            <!-- Title -->
            <h1 class="text-2xl font-bold text-gray-800 mb-6">
                📝 Note Details
            </h1>

            <!-- Note Body -->
            <div class="bg-gray-50 p-6 rounded-lg border text-gray-700 leading-relaxed text-lg">
                <?= htmlspecialchars($note['body']) ?>
            </div>

            <!-- Actions -->
            <div class="mt-8 flex justify-between items-center">

                <a href="lara-cast/notes"
                   class="text-sm text-gray-500 hover:text-gray-700 transition">
                    ← Back to Notes
                </a>

                <div class="space-x-3">
                    <a href="lara-cast/note/edit?id=<?= $note['id'] ?>"
                       class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition">
                        Edit
                    </a>

                    <form method="POST" action="/note/delete" class="inline">
                        <input type="hidden" name="id" value="<?= $note['id'] ?>">
                        <button
                            class="bg-red-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-red-700 transition">
                            Delete
                        </button>
                    </form>
                </div>

            </div>

        </div>

    </div>
</main>

<?php include "views/partials/footer.php"; ?>