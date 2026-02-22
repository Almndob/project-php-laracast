<?php include "partials/head.php"; ?>
<?php include "partials/nav.php"; ?>
<?php include "partials/banner.php"; ?>

<main class="min-h-screen bg-gray-50 py-10">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">
                📚 All Notes
            </h1>

            <a href="/lara-cast/notes/create"
               class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                + Create Note
            </a>
        </div>

        <!-- Card -->
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-100">

            <table class="min-w-full divide-y divide-gray-200">

                <thead class="bg-gray-900">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-white">Name</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-white">Email</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-white">Note</th>
                        <th class="px-6 py-4 text-center text-sm font-semibold text-white">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100 bg-white">

                <?php foreach($notesInfo as $noteInfo): ?>

                    <tr class="hover:bg-gray-50 transition">

                        <td class="px-6 py-4 text-sm text-gray-800 font-medium">
                            <?= htmlspecialchars($noteInfo['name']) ?>
                        </td>

                        <td class="px-6 py-4 text-sm text-gray-600">
                            <?= htmlspecialchars($noteInfo['email']) ?>
                        </td>

                        <td class="px-6 py-4 text-sm text-gray-700 max-w-xs truncate">
                            <a href="/lara-cast/note?id=<?= $noteInfo['id'] ?>"
                               class="text-blue-600 hover:text-blue-800 hover:underline transition">
                                <?= htmlspecialchars($noteInfo['body']) ?>
                            </a>
                        </td>

                        <td class="px-6 py-4 text-center space-x-2">
                            <a href="/lara-cast/note/edit?id=<?= $noteInfo['id'] ?>"
                               class="text-sm px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">
                                Edit
                            </a>

                            <a href="/lara-cast/note/delete?id=<?= $noteInfo['id'] ?>"
                               class="text-sm px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 transition">
                                Delete
                            </a>
                        </td>

                    </tr>

                <?php endforeach; ?>

                </tbody>

            </table>
        </div>

    </div>
</main>

<?php include "partials/footer.php"; ?>