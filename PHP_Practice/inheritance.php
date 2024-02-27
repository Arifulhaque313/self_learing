<?php
    class Car{
        public $name, $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
    }
    

    class Toyota extends Car{
        public function getMessage(){
            echo "Name is : ".$this->name . " and The age is : ".$this->age;
        }
    }


    $newCar = new Toyota("Toyota Corolla", 23);

    $newCar->getMessage();
?>