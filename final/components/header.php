
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
    <link rel="stylesheet" href= "css/normalize.css">
    <link rel="stylesheet" href= "css/stylesheet.css">
</head>
<body>
    <header>
        <div class="container cont__head">
            <div class="header__mobile">
            <a href="index.php"><h1 class="header__title">Progrecipes</h1></a>
            <img class="header__menuButton" src="https://via.placeholder.com/50" />
        </div>
        <form action="">
            <input type="search" class="header__search" placeholder="What are you hungry for?" />
            <input type="submit">Submit</input>
        </form>
            <?php 
    $main_navigation=[
        [
            'title' => 'Recipes',
            'url' => 'recipes.php',
        ],
        [
            'title' => 'Login',
            'url' => 'login.php',
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