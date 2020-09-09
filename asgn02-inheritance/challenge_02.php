<?php

class Jedi {
  var $first_name;
  var $last_name;
  var $lightsaber_color;
  var $first_name_of_master;
  var $last_name_of_master;
  var $rank;

  function get_rank() {
    return $this->first_name . " " . $this->last_name . "'s rank in the Jedi Order is " . $this->rank . ".<br>";
  }

  function get_lightsaber_color() {
     return $this->first_name . " " . $this->last_name . "'s lightsaber color is " . $this->lightsaber_color . ".<br>";
  }

  function get_master() {
    return $this->first_name . " " . $this->last_name . "'s Jedi master is " . $this->first_name_of_master . " " . $this->last_name_of_master . ".<br>";
  }
}

class Youngling extends Jedi {
  var $rank = "Jedi Youngling";
  
  function get_master() {
    return "Jedi younglings do not have a master in the traditional sense. Instead, they are instructed in groups by older more experienced Jedi Master, such as Masters Yoda and Tera Sinube.<br>";
  }
}

class Padawan extends Jedi {
  var $rank = "Jedi Padawan";
}

class Knight extends Jedi {
  var $rank = "Jedi Knight";
  var $first_name_of_padawan;
  var $last_name_of_padawan;

  function get_padawan() {
    return $this->first_name . " " . $this->last_name . "'s Jedi padawan is " . $this->first_name_of_padawan . " " . $this->last_name_of_padawan . ".<br>";
  }

  function get_master() {
    return $this->first_name . " " . $this->last_name . "'s Jedi master was " . $this->first_name_of_master . " " . $this->last_name_of_master . ".<br>";
  }
}

class Master extends Jedi {
  var $rank = "Jedi Master";
  var $jedi_council_member;

  function is_on_the_council() {
    if($this->jedi_council_member = true) {
      return $this->first_name . " " . $this->last_name . " is on the Jedi Council.";
    } else {
      return $this->first_name . " " . $this->last_name . " is not on the Jedi Council.";
    }
  }

  function get_master() {
    return $this->first_name . " " . $this->last_name . "'s Jedi master was " . $this->first_name_of_master . " " . $this->last_name_of_master . ".<br>";
  }
}

$y = new Youngling;

$y->first_name = "Mari";
$y->last_name = "Amithest";
$y->lightsaber_color = "blue";

echo $y->get_rank();
echo $y->get_lightsaber_color();
echo $y->get_master() . "<br>";


$p = new Padawan;

$p->first_name = "Ahsoka";
$p->last_name = "Tano";
$p->lightsaber_color = "green";
$p->first_name_of_master = "Anakin";
$p->last_name_of_master = "Skywalker";

echo $p->get_rank();
echo $p->get_lightsaber_color();
echo $p->get_master() . "<br>";


$k = new Knight;

$k->first_name = "Anakin";
$k->last_name = "Skywalker";
$k->lightsaber_color = "blue";
$k->first_name_of_master = "Obi-Wan";
$k->last_name_of_master = "Kenobi";
$k->first_name_of_padawan = "Ashoka";
$k->last_name_of_padawan = "Tano";

echo $k->get_rank();
echo $k->get_lightsaber_color();
echo $k->get_padawan();
echo $k->get_master() . "<br>";


$m = new Master;

$m->first_name = "Obi-Wan";
$m->last_name = "Kenobi";
$m->lightsaber_color = "blue";
$m->first_name_of_master = "Qui-Gon";
$m->last_name_of_master = "Jin";
$m->jedi_council_member = true;

echo $m->get_rank();
echo $m->get_lightsaber_color();
echo $m->get_master();
echo $m->is_on_the_council();

?>