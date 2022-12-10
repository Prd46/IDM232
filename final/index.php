<?php 
   include_once __DIR__ . '/connection.php';
  $page_name = 'Home'; // Gives a value if page name is missing
  include_once __DIR__ . '/components/header.php'
?>
<main>
   <h1 class="indexText leadText">Welcome to Progrecipes</h1>
   <h2 class="indexText">For all the newest and freshest recipes.</h2>
   <!--Load 3 random recipes, if you can -->
   <div class="main__postArea">
      <div class="main__postReel">
         <?php 
         include_once __DIR__ . '/components/indexReel.php'
         ?>
      </div>
   </div>
   <h3 class="indexText">Take a gander at our wide list of recipes. Use the search and filters to find exactly what you're looking for.</h3>
      <a  class="returnLink buttonText" href="<?php echo site_url(); ?>/search.php">Explore</a>
    </main>
<?php include "components/footer.php" ?>