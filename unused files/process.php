<?php echo"hello world";
var_dump($_POST);?>
<br>
<?php>
print_r($_POST);
?>
<br>
<?php echo $_POST['email'] ?>
<?php echo $_POST['password'] ?>
<br>
<?php
$cars = [car1, car2, car3];
echo $cars[0];
echo $cars[1];
echo $cars[2];
?>
<?php 
function redirect_to($location)
    {
        header('Location ' . $location);
        exit;
    }
redirect_to('https://google.com'); //MUST be a full URL
?> 