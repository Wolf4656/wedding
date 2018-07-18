<?php
include "update.php";

$rsvpCode = $_POST ["rsvpCode"];

Update::updateGuestAttending($rsvpCode);

header("Location: /setpassword.php?rsvpCode=$rsvpCode");
?>
