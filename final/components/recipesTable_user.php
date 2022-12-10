<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<div class="recipesContainer">
<?php
    //uses the same flow as the recipe table, but styled to be images with text on hover
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
      echo "
      <a href='{$site_url}/details.php?id={$recipe['id']}'>
      <div class='imageContainer'>
      <img src='{$site_url}/media/{$recipe['image_path']}.jpg' class='tableImage2' alt='Recipe Image'>
        <div class='imageContainerText'>
          <p class='postText'>{$recipe['title']}</p>
          <p class='postText'>{$recipe['prepTime']}</p>
          <p class='postText'>{$recipe['rating']}</p>
        </div>
      </div>
      </a>
      ";
    } //Removed ingredients and steps to save space
?>
</div>