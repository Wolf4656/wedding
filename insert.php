<?php

include 'select.php';

class Insert {
  public static function insertGuest($firstName, $lastName, $fullName, $username, $password, $rsvpCode){
    $connection = Select::connect();

    //prepare
    if(!$statement = $connection->prepare(
    "INSERT INTO guests (firstName, lastName, fullName, username, password, rsvpCode)
     VALUES (?,?,?,?,?,?)")){
       die ("guest entry failed: " . $connection->error);
     }
     //Bind
     if(!$statement->bind_param("ssssss", $firstName, $lastName, $fullName, $username, $password, $rsvpCode))
       die("guest bind failed: " . $statement->error);
     //execute
     if(!$statement->execute()) {
       die("guest execute failed: " . $statement->error);
    }
    return true;
  }
 }
?>
