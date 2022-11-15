<?php 
   include_once __DIR__ .'/connection.php'; 
  $page_name = 'Recipe Details'; // Gives a value if page name is missing
  include "components/header.php" 
?>

<main>
    <form action="includes/process_posts.php" method="POST">
    <div class="recipeCard">
      <img class="detailsFeatured" src="media/fenchfy.jpg" />
      <div class="recipeInfo">
        <label for="">Title</label> <input class="recipeTitle" type="text" name="title">
        <label for="">Prep Time</label> <input class="recipePrepTime" type="text" name="prepTime">
        <label for="">Rating</label> <input class="recipeRating" type="text" name="rating">
      </div>
    </div>

    <div class="recipeIngredients">
        <label for="">Ingredients</label>
                <br>
                <textarea class="recipeIngredients js-tinymce" name="ingredients" id="" cols="30"
                  rows="10"></textarea>
    </div>

    <div class="recipeInstructions">
        <label for="">Steps</label>
                <br>
                <textarea class="recipeSteps js-tinymce" name="steps" id="" cols="30"
                  rows="10"></textarea>
    </div>
    <input type="submit" value="submit">
</form>
  </main>
<?php include "components/footer.php" ?>