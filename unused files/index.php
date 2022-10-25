<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'local_idm232';
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//THIS IS SENSITIVE INFO. Not a big deal because it's local, but BE CAREFUL. NEVER STORE THIS INFO IN CODE EVER. 
//This establishes connection

if (mysqli_connect_errno()){
    die('Database connection failed: ') . 
    mysqli_connect_error() . 
    '(' . mysqli_connect_errno() . ')'
} //Error message, if it does not work for whatever reason. 

$query = 'SELECT * from users';
$result = mysqli_query($connection, $query);

if ($result){
    echo 'success!';
} else {

    die('Database query failed. ' . mysqli_error($connection));
}
$while ($row = mysql_fetch_array($result)){
    var_dump{$row};
    echo '<hr>';

}

?>
<?php
$page_name = 'Home';
include "components/variables.php"
?>
<?php include "components/header.php"
?>
<h1><?php echo $h1label;?></h1>
<?php include "components/footer.php"
?>