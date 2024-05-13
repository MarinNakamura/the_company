<?php
include_once "../classes/User.php";

// Create an obj
$user = new User;

// Call the method
$user->store($_POST);
?>