<?php
    abstract class abastactcalssA {
        protected $name;

        public function __construct($n){
            $this->name = $n;
        }
        
        abstract function show();
    }

    class abastactcalssB extends abastactcalssA{
        public function show(){
            echo "Its working and the value is ".$this->name;
        }
    }

    $newObj = new abastactcalssB("sajib");
    $newObj->show();

?>