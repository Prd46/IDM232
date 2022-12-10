<?php 
   include_once __DIR__ .'/connection.php'; 
  $page_name = 'Add Recipe'; // Gives a value if page name is missing
  include "components/header.php" 
?>

<?php
// get users data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>
<main> 
    <form action="includes/process_posts.php" method="POST">
    <div class="recipeCard">
      <div class="recipeInfo">
      <label for="image_path">Image</label> <input class="recipeInput" type="text" id="image_path" name="image_path">
        <label for="title">Title</label> <input class="recipeInput" type="text" id="title" name="title">
        <label for="prepTime">Prep Time</label> <input class="recipeInput" type="text" id="prepTime" name="prepTime">
        <label for="rating">Rating</label> <input class="recipeInput" type="text" id="rating" name="rating">
      </div>
    </div>
<!--Recipe Ingredients and Instructions use wyziwig fields-->
    <div class="recipeIngredients">
        <label for="ingredients">Ingredients</label>
                <br>
                <textarea class="recipeIngredients js-tinymce" name="ingredients" id="ingredients" cols="30"
                  rows="10"></textarea>
    </div>

    <div class="recipeInstructions">
        <label for="steps">Steps</label>
                <br>
                <textarea class="recipeSteps js-tinymce" name="steps" id="steps" cols="30"
                  rows="10"></textarea>
    </div>
    <input type="submit" value="submit" class="editSubmit">
</form>
  </main>
<?php include "components/footer.php" ?>