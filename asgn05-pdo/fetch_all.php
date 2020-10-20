<?php

include_once 'connect.php';

$stmt = $db->query("SELECT * FROM names");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row) {
  
  $firstName = htmlentities($row['firstname']);
  $lastName = htmlentities($row['lastname']);
  $postcode = htmlentities($row['postcode']);

  echo $firstName . " " . $lastName . " " . $postcode . "<br>";

}


?>