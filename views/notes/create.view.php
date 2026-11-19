<?php require base_path("/views/participal/head.view.php");?>
<?php require base_path("/views/participal/nav.view.php");?>
<?php require base_path("/views/participal/header.view.php");?>

  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
<form method="POST" action="/note"class="space-y-8 divide-y divide-gray-200">
  <div class="space-y-8 divide-y divide-gray-200">
    <div>
      <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
        <div class="sm:col-span-6">
          <label for="note" class="block text-sm font-medium text-gray-700">
            Note
          </label>
          <div class="mt-1">
            <textarea id="note" name="note" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md"
            ><?= $_POST['note'] ?? '' ?></textarea>
          </div>
          <?php if(isset($errors['note'])): ?> 
          <p class="mt-2 text-sm text-red-500"><?=$errors['note'] ?></p>
          <?php else: ?> 
          <p class="mt-2 text-sm text-gray-500">Write a few sentences about yourself.</p>
          <?php endif; ?>
        </div>
      </div>
      
    </div>
  </div>

  <div class="pt-5">
    <div class="flex justify-end">
      <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Save
      </button>
    </div>
  </div>
</form>
</div>
</main>
<?php require base_path("/views//participal/footer.view.php");?>