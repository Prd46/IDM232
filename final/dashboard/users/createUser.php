<?php 
echo <pre>;
var_dump($_SERVER);
//Look for DOCUMENT_ROOT to find where the server is pointing at. Used to avoid ../ navigation. 

include_once $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';
?>
<form action="../../includes/process_users.php" method="POST">
    <label for="">First Name</label>
    <input class 