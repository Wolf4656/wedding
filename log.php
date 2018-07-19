<?php
session_start();

include "select.php";
//fix dis shit yo
$username = $_POST["username"];
$password = $_POST["password"];
$password = password_hash($password, PASSWORD_DEFAULT);

var_dump($_POST, $password);

if (Select::signIn($username, $password)) {
  $_SESSION["username"] = $username;
  //header('Location: /profile.php');
} else {
  //header('Location: /login.php');
}
?>
