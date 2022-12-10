
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
    <script src="https://cdn.tiny.cloud/1/dke3l71uyeaxc8uqffxi64lz3i1u03yw63ifcy05vukljnkm/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href= "<?php echo site_url(); ?>/css/normalize.css">
    <link rel="stylesheet" href= "<?php echo site_url(); ?>/css/stylesheet.css?v=<?php echo time();?>">
    <link rel="icon" href="<?php echo site_url(); ?>/media/favicon.png">
</head>
<body>
    <header>
        <div class="container cont__head">
            <div class="header__mobile">
            <a href="<?php echo site_url(); ?>/index.php"><h1 class="header__title">Progrecipes</h1></a>
            </div>
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