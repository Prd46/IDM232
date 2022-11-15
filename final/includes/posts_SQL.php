<?php
/**
 * 
 */
function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a services into the database
 * @param  string $name - service name of the service
 * @param  string $description - service description of the service
 * @param  string $price - service price of the service
 * @return object - mysqli_result
 */
function add_recipe($title, $prepTime, $rating, $ingredients, $steps)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (title, prepTime, rating, ingredients, steps)';
    $query .= " VALUES ('$title', '$prepTime', '$rating', '$ingredients', '$steps')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}