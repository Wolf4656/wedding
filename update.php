<?php

include "select.php";

class Update {

  public static function updateGuestAttending($rsvpCode, $i){
    $connection = Select::connect();
    if(!$statement = $connection->prepare(
      "UPDATE guests SET attending=? WHERE rsvpCode=?"
    )) {
      die("Error = " . $statement->error);
    }
    if(!$statement->bind_param("is", $i=1, $rsvpCode)){
      die("Error = " . $statement->error);
    }
    if(!$statement->execute()){
      die("Error = " . $statement->error);
    }
  }

  public static function updateGuestUsernamePassword($username, $password, $rsvpCode){
    $connection = Select::connect();
    if(!$statement = $connection->prepare(
      "UPDATE guests SET username=?, password=? WHERE rsvpCode=?"
    )) {
      die("Error = " . $statement->error);
    }
    if(!$statement->bind_param("sss", $username, $password, $rsvpCode)){
      die("Error = " . $statement->error);
    }
    if(!$statement->execute()){
      die("Error = " . $statement->error);
    }
  }
}
?>
