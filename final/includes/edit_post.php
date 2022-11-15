<?php

include_once __DIR__ . '/../connection.php';

if (!$_POST) {
    die('Unauthorized action');
}


// Store $_POST data to variables for readability
$title_value = $_POST['title'];
$prepTime_value = $_POST['prepTime'];
$rating_value = $_POST['rating'];
$ingredients_value = $_POST['ingredients'];
$steps_value = $_POST['steps'];
$id_value = $_POST['id'];

// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET title = '{$title_value}', prepTime = '{$prepTime_value}', rating = '{$rating_value}', ingredients = '{$ingredients_value}', steps = '{$steps_value}' WHERE id = {$id_value}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/allRecipes.php');
} else {
    $error_message = 'Sorry there was an error creating the recipe';
    echo $error_message;
}
