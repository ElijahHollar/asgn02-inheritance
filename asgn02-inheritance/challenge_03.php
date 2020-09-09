<?php

class Bicycle {
  public $brand;
  public $model;
  public $year;
  protected $description;
  private $weight_kg;
  protected $wheels = 2;

  public function name() {
    return "$this->year, $this->brand $this->model"; 
  }

  public function set_weight_kg($kg) {
    $this->weight_kg = floatval($kg);
  }

  public function get_weight_kg() {
    return $this->weight_kg . " kg";
  }

  public function weight_lbs() {
    return $this->weight_kg / 0.453592 . " lbs";
  }

  public function set_weight_lbs($weight_lbs) {
    $this->weight_kg = $weight_lbs * 0.453592;
    return $this->weight_kg;
  }

  public function set_description($string) {
    $this->description = $string;
  }

  public function get_description() {
    return $this->description;
  }

  public function wheel_details()  {
    if($this->wheels == 1) {
      return "It has 1 wheel.";
    }
    else {
      return "It has $this->wheels wheels.";
    }
  }
}

class Unicycle extends Bicycle {
  protected $wheels = 1;
}

// The bug introduced in to the $weight_kg variable is that the Unicycle subclass does not have direct access to it because it is set to private. However, it can still access $weight_kg though the set_weight_kg() and get_weight_kg() methods.

$b = new Bicycle;

$b_desc = "A new bicycle.";

echo "Bicycle Description:<br>";
$b->set_description($b_desc);
echo $b->get_description() . "<br><br>";

echo "Bicycle weight set by kilogram:<br>";
$b->set_weight_kg(2);
echo $b->get_weight_kg() . "<br>";
echo $b->weight_lbs() . "<br><br>";

echo "Bicycle weight set by pound:<br>";
$b->set_weight_lbs(3);
echo $b->weight_lbs() . "<br>";
echo $b->get_weight_kg() . "<br><br>";

echo "How many wheels does the bicycle have:<br>";
echo $b->wheel_details() . "<br><br><br>";


$u = new Unicycle;

$u_desc = "A new unicycle.";

echo "Unicycle Description:<br>";
$u->set_description($u_desc);
echo $u->get_description() . "<br><br>";

echo "Unicycle weight set by kilogram:<br>";
$u->set_weight_kg(1);
echo $u->get_weight_kg() . "<br>";
echo $u->weight_lbs() . "<br><br>";

echo "Unicycle weight set by pound:<br>";
$u->set_weight_lbs(2);
echo $u->get_weight_kg() . "<br>";
echo $u->weight_lbs() . "<br><br>";

echo "How many wheels does the unicycle have:<br>";
echo $u->wheel_details() . "<br>";

?>