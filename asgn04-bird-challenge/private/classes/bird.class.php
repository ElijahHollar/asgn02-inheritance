<?php

class Bird {

  public $name;
  public $habitat;
  public $food;
  public $nest;
  public $behavior;
  public $tip;
  public $conservation_id;

  protected const CONSERVATION = [
    1 => 'Low Concern',
    2 => 'Moderate Concern',
    3 => 'High Concern',
    4 => 'Extreme Concern'
  ];

  public function __construct($args=[]) {
    //$this->brand = isset($args['brand']) ? $args['brand'] : '';
    $this->name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nest = $args['nest_placement'] ?? '';
    $this->behavior = $args['behavior'] ?? '';
    $this->tip = $args['backyard_tips'] ?? '';
    $this->conservation_id = $args['conservation_id'] ?? '';

    // Caution: allows private/protected properties to be set
    // foreach($args as $k => $v) {
    //   if(property_exists($this, $k)) {
    //     $this->$k = $v;
    //   }
    // }
  }

  public function conservation_level() {
    if($this->conservation_id > 0) {
      return self::CONSERVATION[$this->conservation_id];
    } else {
      return "Unknown";
    }
  }
}

?>
