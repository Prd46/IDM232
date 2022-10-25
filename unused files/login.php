<?php
$page_name = 'Login';
include "components/variables.php"
?>
<?php include "components/header.php"
?>
<h1><?php echo $h1label;?></h1>
<?php include "components/footer.php"
?>

<form action="process.php" method="post">
    <input type="text" value="Default Value">
            <br>
    <label for="emailLabel">User Email</label>
            <br>
        <input class="login__email" name="email"id = "emailLabel" type ="email">
            <br>
    <label for="passwordLabel">Password</label>
            <br>
        <input class="login__password" name="password" id = "passwordLabel" type ="password">
            <br>
        <input type="submit" value="Submit">
   
</form>

