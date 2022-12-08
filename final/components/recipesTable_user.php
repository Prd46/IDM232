<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<div class="recipesContainer">
<?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    //Make a div with the image and the text. Make text relative, show title, prep time, rating. 
    //Put another div out here to organize posts. 
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
      echo "
      <a href='{$site_url}/details.php?id={$recipe['id']}'>
      <div class='imageContainer'>
      <img src='{$site_url}/media/{$recipe['image_path']}.jpg' class='tableImage2' alt='Recipe Image'>
        <div class='imageContainerText'>
          <p class='postText'>{$recipe['title']}</>
          <p class='postText'>{$recipe['prepTime']}</>
          <p class='postText'>{$recipe['rating']}</>
        </div>
      </div>
      </a>
      ";
    } //Wrapped Ingredients and Steps in divs to shrink them down
?>
</div>