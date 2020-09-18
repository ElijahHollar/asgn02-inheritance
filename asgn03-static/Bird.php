<?php

class Bird {
    var $habitat;
    var $food;
    var $nesting = "tree";
    var $conservation;
    var $song = "chirp";
    var $flying = "yes";
    static $instance_count = 0;
    static $egg_num = 0;

    static function create($class_name) {
        self::$instance_count++;
        $bird = new $class_name;
        return $bird;
    }

    function can_fly() {
        if ( $this->flying == "yes" ) {
            $flying_string = "can fly";
        }

        $flying_string = $flying_string ?? 'is stuck on the ground';

        return  $flying_string ;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    var $name = "yellow-bellied flycatcher";
    var $diet = "mostly insects.";
    var $song = "flat chilk";
    static $egg_num = '3-4, somtimes 5';
}

class Kiwi extends Bird {
    var $name = "kiwi";
    var $diet = "omnivorous";
    var $flying = "no";
}
