<?php

include_once 'connect.php';

$stmt = $db->prepare("SELECT * FROM names WHERE firstname = :firstname");


$stmt->bindValue(':firstname', 'Andy', PDO::PARAM_STR);

$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

  $firstName = htmlentities($row['firstname']);
  $lastName = htmlentities($row['lastname']);
  $postcode = htmlentities($row['postcode']);

  echo $firstName . " " . $lastName . " " . $postcode . "<br>";

}

?>