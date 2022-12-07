
<?php 
if (!isset($page_name)) {
  $page_name = 'Missing Title'; // Gives a value if page name is missing
}

$site_name = 'Progrecipes';
$document_title = $page_name . ' | ' . $site_name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $document_title?></title>
    <link rel="stylesheet" href= "<?php echo site_url(); ?>/css/normalize.css">
    <link rel="stylesheet" href= "<?php echo site_url(); ?>/css/stylesheet.css">
    <link rel="icon" href="<?php echo site_url(); ?>/media/favicon.png">
</head>
<body>
    <header>
        <div class="container cont__head">
            <div class="header__mobile">
            <a href="<?php echo site_url(); ?>/index.php"><h1 class="header__title">Progrecipes</h1></a>
            </div>
        <form action="<?php echo site_url(); ?>/search.php" class="searchForm">
            <input type="search" class="header__search" placeholder="What are you hungry for?" />
        </form>
            <?php 
    $main_navigation=[
        [
            'title' => 'Admin',
            'url' => 'allRecipes.php',
        ]
    ];
    ?>
       <?php 
            if(isset($main_navigation)){

            foreach ($main_navigation as $item_array){
                echo"<a href='$item_array[url]' class='header__button'>$item_array[title]</a>";
            }
            }
            ?>
        </div>
        <div class="header__mobileModal">
            <div class="modal__button">Recipes</div>
            <div class="modal__button">Filters</div>
            <div class="modal__button">Admin</div>
        </div>
    </header>