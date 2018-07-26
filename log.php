<?php
session_start();

include "select.php";
$username = $_POST["username"];
$password = $_POST["password"];
$hashed_password = Select::getHashedPassword($username);

//var_dump($_POST, $hashed_password);

if(password_verify($password, $hashed_password)) {
  $_SESSION["username"] = $username;
  header('Location: /profile.php');
} else {
  header('Location: /login.php');
}
?>
