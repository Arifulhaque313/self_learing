<?php
    class A{
        public function add($a, $b){
            echo "Sum of First Add function - " . $a+$b; 
        }

        public function add($a,$b,$c){
            echo "sum of second Add function - " . $a+$b+$c; 
        }
    }

    $B = new A();
    $B->add(2,3);
    $B->add(2,2,2);
?>