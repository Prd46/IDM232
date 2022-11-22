<?php 
include_once __DIR__ . '/connection.php';
$page_name = 'Search'; // Gives a value if page name is missing
include_once __DIR__ .  "/components/header.php";
$recipes = get_recipes();

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE title LIKE '%{$search}%'";
$query .= " OR prepTime LIKE '%{$search}%'";
$query .= " OR rating LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $recipes_results = true;
} else {
    $recipes_results = false;
}

?>
<?php include_once __DIR__ ."/components/sidebar.php"; ?>

        <form action="<?php echo site_url(); ?>/search.php" method="GET">
          <input type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <button type="submit">Search</button>
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
<div class=searchResultTable>
    <?php
    // If we have results, show them
      if ($recipes_results) {
          while ($recipes_results = mysqli_fetch_assoc($results)) {
              echo '<div class="searchResult">';
              echo '<h2>' . $recipes_results['title'] . ' ' . $recipes_results['prepTime'] . ' ' . $recipes_results['rating'] .'</h2>';
              echo '</div>';
          }
      }
?>

  </div>
</div>
  </main>
  <?php include "components/footer.php" ?>