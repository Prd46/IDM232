
<?php 
include_once __DIR__ . '/connection.php';
$page_name = 'All Recipes'; // Gives a value if page name is missing
include_once __DIR__ .  "/components/header.php";

   ?>
<?php 
  if (isset($_GET['search'])){
    $search = $_GET['search'];
  } else {
    $search = '';
  }

  $query = 'SELECT *';
  $query .= 'FROM RECIPES';
  $query .= " WHERE title LIKE '%{$search}%'";
  $query .= " OR prepTime LIKE '%{$search}%'";
  $query .= " OR rating LIKE '%{$search}%'";
  $query .= " OR ingredients LIKE '%{$search}%'";
  $query .= " OR steps LIKE '%{$search}%'";

  $recipes = mysqli_query($db_connection, $query);
  if ($recipes->num_rows > 0){
    $recipes_results = mysqli_fetch_assoc($recipes);
    } else{
    $recipes_results = false;
    }
?>
  <main>
  <?php include_once __DIR__ ."/components/sidebar.php"?>
  <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p>' . $_GET['error'] . '</p>';
          }         
?>
<div class="nonSidebar">

        <form action="<?php echo site_url(); ?>/allRecipes.php" method="GET">
          <input type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <button type="submit">Search</button>
        </form>
        <?php if ($search) {
          echo '<h2>You searched for "' . $search . '"</h2>';
        } ?>
        <?php
        // If no results, echo no results
        if (!$recipes_results) {
            echo '<p>No results found</p>';
        }
?>

<?php
// If error query param exist, show error message
if (isset($_GET['error'])) {
  echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
}?>

<div class="admin__main">
            <div class="admin__actions">
                <a href="<?php echo site_url(); ?>/addRecipe.php" class="admin__link">Add</a>
            </div>
  <div class=searchResultTable>

  <?php 
  if ($recipes_results) {
  include __DIR__ . '/components/recipesTable.php'; 
  };
  ?>
<?php
    // If we have results, show them
?>
</div>
  </main>
  <?php include "components/footer.php" ?>