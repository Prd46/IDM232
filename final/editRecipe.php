<?php 
   include_once __DIR__ .'/connection.php'; 
  $page_name = 'Edit Recipe'; // Gives a value if page name is missing
  include "components/header.php" 
?>
<?php
// get users data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $user variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'User does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

?>
<main>
    <form action="<?php echo site_url(); ?>/includes/edit_post.php" method="POST">
    <div class="recipeCard">
      <img class="detailsFeatured" src="<?php echo site_url(); ?>/media/<?php echo $recipe['image_path']?>.jpg" />
      <div class="recipeInfo">
      <label for="">Image</label> 
        <input class="recipeInput" type="text" name="image_path" value="<?php echo $recipe['image_path']?>">
        <label for="">Title</label> 
        <input class="recipeInput" type="text" name="title" value="<?php echo $recipe['title']?>">
        <label for="">Prep Time</label> 
        <input class="recipeInput" type="text" name="prepTime" value="<?php echo $recipe['prepTime']?>">
        <label for="">Rating</label> 
        <input class="recipeInput" type="text" name="rating" value="<?php echo $recipe['rating']?>">
      </div>
    </div>

    <div class="recipeIngredients">
        <label for="">Ingredients</label>
                <br>
                <textarea class="recipeIngredients js-tinymce" name="ingredients" id="" cols="30"
                  rows="10"><?php echo $recipe['ingredients']?></textarea>
    </div>

    <div class="recipeInstructions">
        <label for="">Steps</label>
                <br>
                <textarea class="recipeSteps js-tinymce" name="steps" id="" cols="30"
                  rows="10"><?php echo $recipe['steps']?></textarea>
    </div>
    <input type="submit" value="Submit" class="editSubmit">
    <input type="hidden" name="id" value="<?php echo $recipe['id']?>">
</form>
  </main>
<?php include "components/footer.php" ?>