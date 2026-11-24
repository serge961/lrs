<?php require "participal/head.view.php";?>
<?php require "participal/nav.view.php";?>
<?php require "participal/header.view.php";?>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
            Hello, <?= $_SESSION['user']['email'] ?? 'Guest' ?>!
        </div>
      </div>
      <!-- /End replace -->
    </div>
  </main>
<?php require "participal/footer.view.php";?>