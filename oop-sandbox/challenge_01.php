<?php

class Bicycle {
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg;

  function name() {
    return "$this->year, $this->brand $this->model"; 
  }

  function weight_lbs() {
    return $this->weight_kg * 2.2046226218;
  }

  function set_weight_lbs($weight_lbs) {
    $this->weight_kg = $weight_lbs * 0.453592;
    return $this->weight_kg;
  }
}

$bicycle1 = new Bicycle;
$bicycle1->brand = 'Zoom';
$bicycle1->model = 'Zip';
$bicycle1->year = '2015';
$bicycle1->description = 'Goes fast';
$bicycle1->weight_kg = 45;


echo $bicycle1->brand . "<br>";
echo $bicycle1->model . "<br>";
echo $bicycle1->year . "<br>";
echo $bicycle1->description . "<br>";
echo $bicycle1->weight_kg . "<br>";


echo $bicycle1->name() . "<br>";
echo $bicycle1->weight_lbs() . "<br>";
echo $bicycle1->set_weight_lbs(80) . "<br>";

?>