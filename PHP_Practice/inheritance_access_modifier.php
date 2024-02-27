<?php
    class A{
        public $name, $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        protected function get_name(){
            echo "This is intro of this protected function ". $this->name; 
        }
    }


    class B extends A{
        public function get_message(){
           echo $this->name. " ". $this->age; 
        }


        public function intro(){
            $this->get_name();
            echo " ==> This is intro class where i call the protected function";
        }
    }


    $newArray = new B("Ariful", 25);

    $newArray->intro();

?>