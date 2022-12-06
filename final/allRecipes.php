
<?php 
include_once __DIR__ . '/connection.php';
$page_name = 'All Recipes'; // Gives a value if page name is missing
include_once __DIR__ .  "/components/header.php";

   ?>
<?php 
  $recipes = get_recipes();
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

  $results = mysqli_query($db_connection, $query);
  if ($results->num_rows > 0){
    $recipes_results = mysqli_fetch_assoc($results);
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
            <input type="search" placeholder="Find Recipe" />
            <p>Searching for: "<?php echo $search; ?>"</p>
            <?php if(!$recipes_results){
              echo '<p>No results found.</p>';
            }
          if ($recipes_results){
                // If we have results, show them
        while ($recipes_results = mysqli_fetch_assoc($results)) {
            echo '<div class="searchResult">';
            echo '<h2>' . $recipes_results['title'] . ' ' . $recipes_results['prepTime'] . ' ' . $recipes_results['rating'] .'</h2>';
            echo '</div>';
        }

          }
            ?>
            <button type="submit">Submit</button>
        </form>
  <div class="admin__main">
            <div class="admin__actions">
                <a href="<?php echo site_url(); ?>/addRecipe.php" class="admin__link">Add</a>
            </div>
            <?php include __DIR__ . '/components/recipesTable.php'; ?>
        </div>
  </main>
  <?php include "components/footer.php" ?>