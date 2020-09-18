<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn02 Inheritance</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<h1>Inheritance Examples</h1>

<?php 
    include 'Bird.php';
    
    $bird = new Bird;
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

    $fly_catcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';

    $kiwi = new Kiwi;
    $kiwi->flying = "no";
    echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p>";    

    echo "<h1>Static Examples</h1>";

    echo "<h2>Before using the create method</h2>";

    echo "<p>Bird count: " . $bird::$instance_count . "</p>";
    echo "<p>Flycatcher count: " . $fly_catcher::$instance_count . "</p>";
    echo "<p>Kiwi count: " . $kiwi::$instance_count . "</p>";

    $bird2 = $bird::create('Bird');
    $fly_catcher2 = $bird::create('YellowBelliedFlyCatcher');
    $kiwi2 = $bird::create('Kiwi');

    echo "<h2>After using the create method</h2>";

    echo "<p>Bird count: " . $bird::$instance_count . "</p>";
    echo "<p>Flycatcher count: " . $fly_catcher::$instance_count . "</p>";
    echo "<p>Kiwi count: " . $kiwi::$instance_count . "</p>";

?>

    <p><a href="../index.php">Return to WEB250 hompage</a></p>
    </body>
</html>
