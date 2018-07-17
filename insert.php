<?php

include 'select.php';

class Insert {
  /*
  this function returns the connection to the db
  */
  public static function insertGuest($firstName, $lastName, $password, $rsvpCode){
    $connection = Select::connect();

    //prepare
    if(!$statement = $connection->prepare(
    "INSERT INTO guests (firstName, lastName, password, rsvpCode)
     VALUES (?,?,?,?)")){
       die ("guest entry failed: " . $connection->error);
     }
     //Bind
     if(!$statement->bind_param("ssss", $firstName, $lastName, $password, $rsvpCode))
       die("guest bind failed: " . $statement->error);
     //execute
     if(!$statement->execute()) {
       die("guest execute failed: " . $statement->error);
    }
    return true;
  }
 }
?>
