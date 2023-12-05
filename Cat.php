<?php

class Cat {
    public $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function birthday() {
        $this->age++;
    }

    public static function payAttention() {
        echo "meow!";
    }
}

?>
