<?php 
  $page_name = 'Edit Recipe'; // Gives a value if page name is missing
?>
<?php include "components/header.php" ?>
  <main>
    <div class="recipeCard">
    <img class="detailsFeatured" src="https://via.placeholder.com/150" />
    <div class="recipeInfo">
    <h3>Crispy French Fries</h3>
    <p>Prep time: 20 minutes</p>
    <p>Rating: 4.2 stars</p>
    </div>
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