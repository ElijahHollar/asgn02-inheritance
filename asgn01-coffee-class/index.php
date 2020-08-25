<?php

class Coffee {
  var $coffee_name;
  var $roast;
  var $cost_per_pound;
  var $amount_in_pounds;

  function total_cost($amount_in_pounds) {
    return "The total cost is $" . $this->cost_per_pound * $amount_in_pounds;
  }

  function display_order() {
    return "You ordered $this->amount_in_pounds pounds of $this->coffee_name. It is a $this->roast roast.";
  }
}

$my_first_order = new Coffee;
$my_first_order->coffee_name = "Suplicar Clemencia";
$my_first_order->roast = "dark";
$my_first_order->cost_per_pound = 11.95;
$my_first_order->amount_in_pounds = 5;

$my_second_order = new Coffee;
$my_second_order->coffee_name = "Summer Seasonal - Colombia Tolima";
$my_second_order->roast = "light";
$my_second_order->cost_per_pound = 13.95;
$my_second_order->amount_in_pounds = 3;

echo $my_first_order->display_order() . "<br><br>";
echo $my_first_order->total_cost($my_first_order->amount_in_pounds) . "<br><br>";
echo "------------------------------------------------------------------<br><br>";

echo $my_second_order->display_order() . "<br><br>";
echo $my_second_order->total_cost($my_second_order->amount_in_pounds);
?>
