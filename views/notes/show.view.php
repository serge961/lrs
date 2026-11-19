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
  <button type="submit">Удалить</button>
</form>
    </div>
  </main>
<?php require base_path("/views//participal/footer.view.php");?>