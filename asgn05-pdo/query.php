<?php

include_once 'connect.php';

foreach($db->query("SELECT * FROM names") as $row ) {
  echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>";

}


?>