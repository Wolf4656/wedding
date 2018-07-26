<?php

include "insert.php";

//Set up variables
$firstName = $_POST ["firstName"];
$lastName = $_POST ["lastName"];
$rsvpCode = generateUniqueToken(6);
$password = password_hash($_POST ["password"], PASSWORD_DEFAULT);

$fullName = $firstName . " " . $lastName;
$username = substr($firstName, 0,1) . $lastName . generateUniqueToken(3);

function isToken($token)
{
    if (isset($token) && $token) {

        //verification values in BD
        $connection = Select::connect();
        $query = "SELECT rsvpCode FROM guests WHERE rsvpCode='$token'";
        $sql = $connection->query($query);
        if (mysqli_num_rows($sql) > 0) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function generateUniqueToken($number)
{
    $arr = array('a', 'b', 'c', 'd', 'e', 'f',
                 'g', 'h',  'i', 'j', 'k', 'l',
                 'm', 'n', 'o', 'p', 'r', 's',
                 't', 'u', 'v', 'x', 'y', 'z',
                 'A', 'B', 'C', 'D', 'E', 'F',
                 'G', 'H', 'I', 'J', 'K', 'L',
                 'M', 'N', 'O', 'P', 'R', 'S',
                 'T', 'U', 'V', 'X', 'Y', 'Z',
                 '1', '2', '3', '4', '5', '6',
                 '7', '8', '9', '0');
    $token = "";
    for ($i = 0; $i < $number; $i++) {
        $index = rand(0, count($arr) - 1);
        $token .= $arr[$index];
  }

    if (isToken($token)) {
    return generateUniqueToken($number);
  } else {
    return $token;
  }
}


if(Insert::insertGuest($firstName, $lastName, $fullName, $username, $password, $rsvpCode)){
echo "SUCCESS";
header('Location: http://localhost:9001/controlpanel.php');
} else {
echo "ERROR";
VAR_DUMP($_POST, $rsvpCode);
}
?>
