<?php
    class Person{
        public $name;
        public $age;
        public $gender;


        function __construct($name, $age, $gender)
        {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        function get_info(){
            return $this->name." ".$this->age." ". $this->gender;
        }
    }

    $sajib = new Person("sajib", 25, "Male");
    echo $sajib->get_info();
?>