<?php
/*SELECT QUESTION
FROM Questions
ORDER BY RAND()  
LIMIT 1; */
$query = 'SELECT *';
$query .= 'FROM recipes';
$query .= " ORDER BY RAND()";
$query .= " LIMIT 5;";
$features = mysqli_query($db_connection, $query);

$site_url = site_url();
while ($recipe = mysqli_fetch_array($features)) {
  echo "
  <a href='{$site_url}/details.php?id={$recipe['id']}'>
  <div class='imageContainer'>
  <img src='{$site_url}/media/{$recipe['image_path']}.jpg' class='tableImage2 featuredReelImage' alt='Recipe Image'>
    <div class='imageContainerText'>
      <p class='postText'>{$recipe['title']}</>
      <p class='postText'>{$recipe['prepTime']}</>
      <p class='postText'>{$recipe['rating']}</>
    </div>
  </div>
  </a>
  ";
} 
?>
<div class="index__post "></div>