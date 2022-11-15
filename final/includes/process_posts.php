<?php

include_once __DIR__ . '/../connection.php';

if (!$_POST) {
    die('Unauthorized action');
}

// Store $_POST data to variables for readability
$title = $_POST['title'];
$prepTime = $_POST['prepTime'];
$rating = $_POST['rating'];
$ingredients = $_POST['ingredients'];
$steps = $_POST['steps'];

$result = add_recipe($title, $prepTime, $rating, $ingredients, $steps);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/allRecipes.php');
} else {
    $error_message = 'Sorry there was an error creating the recipe';
    echo error_message();
}
