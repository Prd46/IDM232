<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<table class="min-w-full divide-y divide-gray-300">
  <thead class="bg-gray-50">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Prep Time</th>
      <th scope="col">Rating</th>
      <th scope="col">Ingredients</th>
      <th scope="col">Steps</th>
      <th scope="col">
        <span class="sr-only">Edit</span>
      </th>
      <th scope="col">
        <span class="sr-only">Delete</span>
      </th>
    </tr>
  </thead> 
  <tbody class="divide-y divide-gray-200 bg-white">
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "
          <tr>
            <td class='smallCol'>{$recipe['id']}</td>
            <td class='tableImage'><img src='{$site_url}/media/{$recipe['image_path']}.jpg' class='tableImage' alt='Recipe Image'></td>
            <td>{$recipe['title']}</td>
            <td class='smallCol'>{$recipe['prepTime']}</td>
            <td class='smallCol'>{$recipe['rating']}</td>
            <td>
            <div class='outerTd'>
              <div class='innerTd'>
                {$recipe['ingredients']}
              </div>
            </div>
            </td>
            <td>
            <div class='outerTd'>
              <div class='innerTd'>
                {$recipe['steps']}
              </div>
            </div>
            </td>
            <td>
              <a href='{$site_url}/editRecipe.php?id={$recipe['id']}' class='adminTableFunction'>Edit</a>
              
            </td>
            <td>
            <a href='{$site_url}/includes/deleteRecipe.php?id={$recipe['id']}' class='adminTableFunction'>Delete</a>
            </td>
          </tr>";
    } //Wrapped Ingredients and Steps in divs to shrink them down
?>
  </tbody>
</table>