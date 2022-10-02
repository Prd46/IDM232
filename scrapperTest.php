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
  //Use ++ to incriment by 1, setting a variable to a different number. Use -- to subtract 1. 
  ?>
</body>
</html>