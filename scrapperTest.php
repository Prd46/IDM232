<?php include 'PHPStuff/test.php' 
//Changing directory, use ../ to go up a directory. USE INCLUDE TO REUSE ELEMENTS, LIKE HEADERS. 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <?php include 'PHPStuff/header.php' ?>

  <h1><?php echo 'hello world'; ?></h1>
  <!-- This is an HTML comment, visible in console. -->
  <button>Click me</button>
  <?php include 'PHPStuff/variables.php'?>  
  <?php echo $vx;
  var_dump($vx); //helps with debugging / giving info about a variable. 
var_dump($cookies); ?> 
  <?php 
  // This is a PHP comment. Not visible in console. Most PHP is at the TOP of the page,
  //but forms and other inputs will be made in line, lower down in the page. 
  ?>

  <?php 
  $var1 = 3;
  $var2 = 4;
  ?>

  <?php
  $basicMathValue = ((1+2+$var1) * $var2) / 2 - 5;
  // (6) * 4 / 2 - 5  ->  24/2 - 5 
  echo $basicMathValue;
  ?>
<?php
  $a = 3;
  $b = 4; 
if ($a<$b) {
echo 'A';
}
//Gonna use this to check if a user is logged in as an admin. 

//SWITCHES

$a = 3;

switch($a){
  case 0;
    echo 'a equals 0';
  case 1;
    echo 'a equals 1';
  case 3;
    echo 'a equals 3';
    break; // CUTS OFF SWITCH FROM READING ALL THE OTHERS AFTER THAT. 
  case 4;
    echo 'a equals 4';
}

//LOOPS

$count = 0;
while ($count <= 10){
  echo $count;
  $count++;
}

$count = 0;
for ($count; $count<=10; $count++){
  echo $count . ', ';
}

$ages = [4, 7, 15, 16, 20];
foreach($ages as $asdf){ //CREATES the age variable, looping through the AGES array. 
  echo "Age: {$asdf}<br>";
}

//functions

function say_hello()
{
  echo 'hello world!<br>';
}

function say_something($word, $w2)
{
  echo "hello {$word}<br>";
  echo "hello {$w2}<br>";
}

say_hello();
say_something('cowboy!', 'pizza'); // In the parentheses of the function calling, you need to put values for the listed variables. 
//use GLOBAL to access outside variables inside the function. 
?>



<?php include __DIR__ . '/app.php'; ?>//Allows you to shorten path using directory.



</body>
</html>