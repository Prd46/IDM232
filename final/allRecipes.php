
<?php include_once __DIR__ .  "/components/header.php";
   include_once __DIR__ . '/connection.php';?>
<?php 
  $page_name = 'All Recipes'; // Gives a value if page name is missing
  $recipes = get_recipes();
?>
  <main>
  <?php include __DIR__ ."/components/sidebar.php"?>
  <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p>' . $_GET['error'] . '</p>';
          }
?>
  <div class="admin__main">
            <div class="admin__actions">
                <a href="addRecipe.php" class="admin__link">Add</a>
                <a href="editRecipe.php" class="admin__link">Edit</a>
                <p class="admin__link">Delete</p>
            </div>
            <?php include __DIR__ . '/components/recipesTable.php'; ?>
  </main>
  <?php include "components/footer.php" ?>