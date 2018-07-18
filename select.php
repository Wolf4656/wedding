<?php

class Select {
  /*
  this function returns the connection to the db
  */
  public static function connect(){
    $mysql_host = "localhost";
    $mysql_user = "wolf4656_1";
    $mysql_password = "root1";
    $mysql_database = "wedding";


    //create connection
    $connection = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);

    //check connection
    if ($connection->connect_error) {
      die("CANNOT CONNECT!:" . $connection->connect_error);
    } else {
      return $connection;
    }
 }

 public static function selectGuests(){
   $connection = Select::connect();
   $sql = "SELECT * FROM guests WHERE attending = 1";
   $guests = $connection->query($sql);
   $connection->close();
   return $guests;
 }


}
?>
