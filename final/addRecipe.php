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
      <label for="">Image</label> <input class="recipeInput" type="text" name="image_path">
        <label for="">Title</label> <input class="recipeInput" type="text" name="title">
        <label for="">Prep Time</label> <input class="recipeInput" type="text" name="prepTime">
        <label for="">Rating</label> <input class="recipeInput" type="text" name="rating">
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