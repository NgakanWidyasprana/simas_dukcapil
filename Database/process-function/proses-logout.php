<?php 
 
session_start();
session_destroy();
 
header('Location: ..\..\Form\form-login.php');
 
?>