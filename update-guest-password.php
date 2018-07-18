<?php
include "update.php";

$username = $_POST ["userName"];
$password = password_hash($_POST ["password"], PASSWORD_DEFAULT);
$rsvpCode = $_GET ["rsvpCode"];

Update::updateGuestUsernamePassword($username, $password, $rsvpCode);

header("Location: /thanks.php");
?>
