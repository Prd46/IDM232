<?php 
if (!isset($page_name)) {
  $page_name = 'Edit'; // Gives a value if page name is missing
}

$site_name = 'Progrecipes';
$document_title = $page_name . ' | ' . $site_name;
?>
<?php include "components/header.php" ?>
  <main>
    <div class="recipeCard">
    <img class="detailsFeatured" src="media/fenchfy.jpg" />
    <h3>Crispy French Fries</h3>
    <p>Prep time: 20 minutes</p>
    <p>Rating: 4.2 stars</p>
    </div>

    <div class="recipeIngredients">
      <h3>Ingredients</h3>
        <ul>
          <li>Ingredient</li>
          <li>Ingredient</li>
          <li>Ingredient</li>
          <li>Ingredient</li>
          <li>Ingredient</li>
        </ul>
    </div>

  <div class="recipeInstructions">
    <h3>Steps</h3>
      <ol>
        <li>Step</li>
        <li>Step</li>
        <li>Step</li>
        <li>Step</li>
        <li>Step</li>
      </ol>
    </div>
  </main>
  <?php include "components/footer.php" ?>