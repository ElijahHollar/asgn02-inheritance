<?php

class Jedi {
  public $first_name;
  public $last_name;
  public $lightsaber_color;
  protected $rank;

  public function get_rank() {
    return $this->first_name . " " . $this->last_name . "'s rank in the Jedi Order is " . $this->rank . ".<br>";
  }

  public function get_lightsaber_color() {
      return $this->first_name . " " . $this->last_name . "'s lightsaber color is " . $this->lightsaber_color . ".<br>";
  }
}
  
class Youngling extends Jedi {
  protected $rank = "Jedi Youngling";
  
  public function get_master() {
    return "Jedi younglings do not have a master in the traditional sense. Instead, they are instructed in groups by older more experienced Jedi Master, such as Masters Yoda and Tera Sinube.<br>";
  }
}

class Padawan extends Youngling {
  protected $rank = "Jedi Padawan";
  public $first_name_of_master;
  public $last_name_of_master;

  public function get_master() {
    if($this->last_name_of_master != null){
      return $this->first_name . " " . $this->last_name . "'s Jedi master is " . $this->first_name_of_master . " " . $this->last_name_of_master . ".<br>";
    }
    else {
      return $this->first_name . " " . $this->last_name . "'s Jedi master is " . $this->first_name_of_master . ".<br>";
    }
  }
}

class Knight extends Padawan {
  protected $rank = "Jedi Knight";
  public $first_name_of_padawan;
  public $last_name_of_padawan;

  public function get_padawan() {
    return $this->first_name . " " . $this->last_name . "'s Jedi padawan is " . $this->first_name_of_padawan . " " . $this->last_name_of_padawan . ".<br>";
  }

  public function get_master() {
    if($this->last_name_of_master != null){
      return $this->first_name . " " . $this->last_name . "'s Jedi master was " . $this->first_name_of_master . " " . $this->last_name_of_master . ".<br>";
    }
    else {
      return $this->first_name . " " . $this->last_name . "'s Jedi master was " . $this->first_name_of_master . ".<br>";
    }
  }
}

class Master extends Knight {
  protected $rank = "Jedi Master";
  protected $jedi_council_member = false;

  public function appoint_to_council() {
    $this->jedi_council_member = true;
  }

  public function remove_from_council() {
    $this->jedi_council_member = false;
  }
  
  public function is_on_the_council() {
    if($this->rank == "Lost Jedi" ) {
      if($this->jedi_council_member == true) {
        return $this->first_name . " " . $this->last_name . " has left the Jedi Order and no longer serves on the council.";
      }
      else {
        return $this->first_name . " " . $this->last_name . " has left the Jedi Order and is no longer eligible to serve on the council.";
      }
    }
    elseif($this->jedi_council_member == true) {
      return $this->first_name . " " . $this->last_name . " is on the Jedi Council.";
    } 
    else {
      return $this->first_name . " " . $this->last_name . " is not on the Jedi Council.";
    }
  }

  public function get_master() {
    if($this->last_name_of_master != null){
      return $this->first_name . " " . $this->last_name . "'s Jedi master was " . $this->first_name_of_master . " " . $this->last_name_of_master . ".<br>";
    }
    else {
      return $this->first_name . " " . $this->last_name . "'s Jedi master was " . $this->first_name_of_master . ".<br>";
    }
  }
}

class Lost extends Master {
  protected $rank = "Lost Jedi";

  public function get_rank() {
    return $this->first_name . " " . $this->last_name . " has chosen to leave the Jedi Order and no longer holds a rank among the jedi. Instead, this individual is reffered to as a " . $this->rank . ".<br>";
  }

  public function get_lightsaber_color() {
    return $this->first_name . " " . $this->last_name . "'s lightsaber color was " . $this->lightsaber_color . ".<br>";
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
$m->appoint_to_council();

echo $m->get_rank();
echo $m->get_lightsaber_color();
echo $m->get_master();
echo $m->is_on_the_council() . "<br><br>";


$l = new Lost;

$l->first_name = "Dooku";
$l->last_name = "Serenno";
$l->lightsaber_color = "blue";
$l->first_name_of_master = "Yoda";
$l->appoint_to_council();

echo $l->get_rank();
echo $l->get_lightsaber_color();
echo $l->get_master();
echo $l->is_on_the_council();

?>