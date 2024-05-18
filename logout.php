<?php
require 'config.php';
$sql= "SELECT * FROM users WHERE id = {$_SESSION['id']}" ;
$result2= mysqli_query($conn,$sql);

// $query= "UPDATE `students` SET `status`='Inactive' WHERE id = {$_SESSION['id']}";
// $result2= mysqli_query($conn,$query);

// session_start();

unset($_SESSION["login"]);
unset($_SESSION["id"]);
session_destroy();

header("Location: sign-in.php");
?>