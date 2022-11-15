<?php
if (!isset($recipes)) {
    echo '$users variable is not defined. Please check the code.';
}
?>
<table class="min-w-full divide-y divide-gray-300">
  <thead class="bg-gray-50">
    <tr>
      <th scope="col">ID</th>
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
            <td>{$recipe['id']}</td>
            <td>{$recipe['title']}</td>
            <td>{$recipe['prepTime']}</td>
            <td>{$recipe['rating']}</td>
            <td>{$recipe['ingredients']}</td>
            <td>{$recipe['steps']}</td>
            <td>
              <a href='{$site_url}/admin/users/edit.php?id={$recipe['id']}'>Edit</a>
              <a href='{$site_url}/admin/users/delete.php?id={$recipe['id']}'>Delete</a>
            </td>
          </tr>";
    }
?>
  </tbody>
</table>