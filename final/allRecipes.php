<?php 
if (!isset($page_name)) {
  $page_name = 'Admin Dashboard'; // Gives a value if page name is missing
}

$site_name = 'Progrecipes';
$document_title = $page_name . ' | ' . $site_name;
?>
<?php include "components/header.php" ?>
  <main>
  <?php include "components/sidebar.php"?>
  <div class="admin__main">
            <div class="admin__actions">
                <p class="admin__link">Add</p>
                <a href="editRecipe.php" class="admin__link">Edit</a>
                <p class="admin__link">Delete</p>
            </div>
            <div class="admin__recipes">
                <div class="recipe__listing">
                    <div class="recipe__title">Title</div>
                    <div class="recipe__type">Type</div>
                    <div class="recipe__time">Prep time</div>
                    <div class="recipe__rating">Rating</div>
                    <div class="recipe__edit">Edit</div>
                    <div class="recipe__delete">Delete</div>
                </div>
            </div>
        </div>
  </main>
  <?php include "components/footer.php" ?>