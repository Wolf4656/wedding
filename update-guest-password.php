<?php
include "update.php";

$username = $_POST ["username"];
$password = password_hash($_POST ["password"], PASSWORD_DEFAULT);
$rsvpCode = $_POST ["rsvpCode"];

if (Select::uniqueUserName($username)) {
  Update::updateGuestUsernamePassword($username, $password, $rsvpCode);
  header("Location: /thanks.php");
} else {
  echo '<script language="javascript">';
  echo 'alert("username not unique")';
  echo '</script>';
  header("Location: /login.php");
}
?>
