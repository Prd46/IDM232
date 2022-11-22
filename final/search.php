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
  $query .= "WHERE title LIKE '%{$search}%'";
  $query .= "OR prepTime LIKE '%{$search}%'";
  $query .= "OR rating LIKE '%{$search}%'";
  $query .= "OR ingredients LIKE '%{$search}%'";
  $query .= "OR steps LIKE '%{$search}%'";

  $results = mysqli_query($db_connection, $query);
  
// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
  $recipes_results = true;
} else {
  $recipes_results = false;
}
?>
  <main>
  <?php include __DIR__ ."/components/sidebar.php"?>
  <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p>' . $_GET['error'] . '</p>';
          }         
?>
 <form action="<?php echo site_url(); ?>/search.php" method="GET">
            <input type="search" placeholder="Find Recipe" />
            <p>Searching for: "<?php echo $search; ?>"</p>
            <button type="submit">Submit</button>
        </form>
        <h2>You searched for "<?php echo $search; ?>"</h2>
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
      </div>
      <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
        <button type="button"
          class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
          <a href="<?php echo site_url() . '/admin/services/create.php' ?>">
            Add service</a></button>
      </div>
    </div>

    <?php
    // If we have results, show them
      if ($recipes_results) {
          while ($recipes_results = mysqli_fetch_assoc($results)) {
              echo '<div class="flex flex-row justify-center items-center">';
              echo '<h2>' . $recipes_results['title'] . ' ' . $recipes_results['prepTime'] . ' ' . $recipes_results['rating'] . '</h2>';
              echo '</div>';
          }
      }
?>

  </div>
</div>
            <?php include __DIR__ . '/components/recipesTable_user.php'; ?>
  </main>
  <?php include "components/footer.php" ?>