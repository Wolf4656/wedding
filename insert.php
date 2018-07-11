<?php

class Insert {
  /*
  this function returns the connection to the db
  */
  public static function insertGuest($firstName, $lastName, $password, $rsvpCode){
    $connection = Select::connect();

    //prepare
    if(!$statement = $connection->prepare(
    "INSERT INTO participants (tag, name, region, rsvpCode)
     VALUES (?,?,?, ?)")){
       die ("Guest entry failed: " . $connection->error);
     }
     //Bind
     if(!$statement->bind_param("sss", $firstName, $lastName, $password, $rsvpCode))
       die("Smasher bind failed: " . $statement->error);
     //execute
     if(!$statement->execute()) {
       die("Smasher execute failed: " . $statement->error);
    }
    return true;
  }
 }


}
?>
