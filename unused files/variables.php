<?php
//different ways of labeling variables
$item = 'Item';
$myVariable = 'some string'; //Javascript standard
$my_variable = 'string'; //PHP standard. NO HYPHENS. 
$myVariable3 = 'somestring'; //Using numbers. DO NOT PUT A NUMBER AT THE START or it will not work

echo $item;

//Float (floating point numbers = anything that deals with decimals)
//Array = collection of values
//Object
//Null = blank


$vx = 300;

$q = 10.34; //This is a float. 
$cookies = ['choc chip', 'oatmeal', 'butterscotch'];

$greeting = 'hello';
$target = 'world';

$phrase = $greeting . '' . $target; //Concatenation. Use period instead of plus, plus being used by JS. 
//Single vs double quotes
echo "$phrase Again"; //will print Hello World Again. Allows you to use apostrophes. 
echo '$phrase Again'; //Will print this all out as a string. To add an apostrophe, put a back slash before the ' 

// use "echo round," "echo ceil," and "echo floor" to work with float values. 

echo round ($q, 1); //rounds to 1 decimal place
echo ceil ($q); //rounds up to next whole number
echo floor ($q); //rounds down to the previous whole number

echo is_int($q); //checks if it is an integer
echo is_float($q); //checks if it is a float
echo is_numeric($q); //checks if it is a numeric number, float, integer, or string. 
?>