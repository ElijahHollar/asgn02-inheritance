<?php

include_once 'connect.php';

$stmt = $db->prepare("SELECT * FROM names WHERE firstname = ?");
$names = array('Hettie', 'Emma', 'Freddie');

foreach($names as $name) {

  $stmt->bindParam(1, $name);

  $stmt->execute();

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $firstName = htmlentities($row['firstname']);
    $lastName = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

    echo $firstName . " " . $lastName . " " . $postcode . "<br>";

  }

}
?>