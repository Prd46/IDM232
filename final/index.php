<?php 
   include_once __DIR__ . '/connection.php';
  $page_name = 'Home'; // Gives a value if page name is missing
  include_once __DIR__ . '/components/header.php'
?>
<main>
   <h1>Welcome to Progrecipes</h1>
   <h2>For all the newest and freshest recipes.</h2>
   <!--Load 3 random recipes, if you can -->
   <div class="indexButton">
      <a href="<?php echo site_url(); ?>/recipes.php" class="buttonText">Explore</a>
   </div>
    </main>
<?php include "components/footer.php" ?>