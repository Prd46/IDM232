<?php 
if (!isset($page_name)) {
  $page_name = 'Search'; // Gives a value if page name is missing
}

$site_name = 'Progrecipes';
$document_title = $page_name . ' | ' . $site_name;
?>
<?php include "components/header.php" ?>
  <main>
  <?php include "components/sidebar.php"?>
  <h2>Showing results for:</h2>
        <div class="search__results">
            <img class="featured" src="https://via.placeholder.com/150" />
            <img class="featured" src="https://via.placeholder.com/150" />
            <img class="featured" src="https://via.placeholder.com/150" />
            <img class="featured" src="https://via.placeholder.com/150" />
            <img class="featured" src="https://via.placeholder.com/150" />
            <img class="featured" src="https://via.placeholder.com/150" />
            <img class="featured" src="https://via.placeholder.com/150" />
            <img class="featured" src="https://via.placeholder.com/150" />
            <img class="featured" src="https://via.placeholder.com/150" />
            <img class="featured" src="https://via.placeholder.com/150" />
        </div>
  </main>
  <?php include "components/footer.php" ?>