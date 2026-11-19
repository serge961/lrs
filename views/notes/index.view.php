<?php require base_path("/views/participal/head.view.php");?>
<?php require base_path("/views/participal/nav.view.php");?>
<?php require base_path("/views/participal/header.view.php");?>

  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
            <?php foreach ($notes as $note): ?>
              <li>
                <a href="/note?id=<?= $note['id']?>"><?= htmlspecialchars($note['body']) ?></a>
              </li>      
            <?php endforeach;?>  
      </div>
      <div>
        <a href="/notes/create">Create note</a>
      </div>

    </div>
  </main>
<?php require base_path("/views//participal/footer.view.php");?>