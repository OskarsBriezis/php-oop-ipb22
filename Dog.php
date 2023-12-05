<?php
include "Animals.php";
class Dog extends Animals {
    // Static method to output "woof!"
    public static function payAttention() {
        echo "woof!";
    }
}

?>
