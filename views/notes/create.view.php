<?php require (__DIR__.'/../partials/head.php') ; ?>
<?php require (__DIR__.'/../partials/nav.php') ; ?>
<?php require (__DIR__.'/../partials/banner.php') ; ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
       <?php if($errors):?>
             <div id="error-message"
                class="fixed top-20 left-1/2 transform -translate-x-1/2 w-1/3
                        bg-red-100 border border-red-400 text-red-700
                        px-6 py-4 rounded-lg shadow-lg
                        opacity-0 -translate-y-5
                        transition-all duration-500 ease-out">

                <?= htmlspecialchars($errors['body']) ?>

             </div>
      <?php endif;?>

      <?php if($seccus):?>
        <div id="success-message"
                class="fixed top-20 left-1/2 transform -translate-x-1/2 w-1/3
                        bg-green-100 border border-green-400 text-green-700
                        px-6 py-4 rounded-lg shadow-lg
                        opacity-0 translate-y-[-20px]
                        transition-all duration-500 ease-out">

                <?= htmlspecialchars($seccus['saveNote']) ?>

            </div>
      <?php endif;?>
      
      <form method="post" class="mt-6">
        <label for="body">Create a note</label>
        <textarea name="body" id="body" cols="30" rows="10" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300"><?= $_POST['body'] ?? '' ?></textarea>
        <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Create Note</button>
      </form>

   

    </div>
  </main>
  <?php require('views/partials/footer.php'); ?>