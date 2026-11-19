<?php require base_path("/views/participal/head.view.php");?>
<?php require base_path("/views/participal/nav.view.php");?>
<?php require base_path("/views/participal/header.view.php");?>


  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
       <div>
        <p>
          <a href="/notes" class="text-blue-500 underline">Go back ...</a>
        </p>
       </div>
      <div class="px-4 py-6 sm:px-0">
        <p>
          <?= htmlspecialchars($note['body'])?>
        </p>
      </div>
<form action="" method="POST">
  <input type="hidden" id="_method" name = "_method" value ="DELETE"/>
  <input type="hidden" name="id" value="<?= $note['id']?>">
  <a class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/notes/edit?id=<?= $note["id"]?>">Редактивровать</a>
  <!-- <a class="font-medi rounded-lg px-3 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900 btn-primary bg-sky-500 hover:bg-sky-700" href="/notes/edit?id=<?= $note["id"]?>">Редактивровать</a> -->
  <button class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" type="submit">Удалить</button>
  <!-- <button class="font-medi rounded-lg px-3 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900 bg-red-500 hover:bg-red-700" type="submit">Удалить</button>-->
</form>
    </div>
  </main>
<?php require base_path("/views//participal/footer.view.php");?>