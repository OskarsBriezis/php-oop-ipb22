<?php

class Animals {
    public $name;
    private $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Public method to increase age by one
    public function birthday() {
        $this->age++;
    }

    // Static method to output "woof!"
    public static function payAttention() {
        echo "woof!";
    }
}