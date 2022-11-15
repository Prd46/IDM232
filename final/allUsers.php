
<?php include "components/header.php" ?>
<?php 
  $page_name = 'All Users'; // Gives a value if page name is missing
?>
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
                <div class="recipe__listing">
                    <div class="recipe__title">Title</div>
                    <div class="recipe__type">Type</div>
                    <div class="recipe__time">Prep time</div>
                    <div class="recipe__rating">Rating</div>
                    <div class="recipe__edit">Edit</div>
                    <div class="recipe__delete">Delete</div>
                </div>
                <div class="recipe__listing">
                    <div class="recipe__title">Title</div>
                    <div class="recipe__type">Type</div>
                    <div class="recipe__time">Prep time</div>
                    <div class="recipe__rating">Rating</div>
                    <div class="recipe__edit">Edit</div>
                    <div class="recipe__delete">Delete</div>
                </div>
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