<?php
    class A{
        public $name; 
        public $color;
        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro(){
            echo "The parent intro is ". $this->name ." ".$this->color."==>"; 
        }
    }


    class B extends A{
        public $weight;
        public function __construct($name, $color, $weight)
        {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        public function intro(){
            echo "The parent intro is ". $this->name ." ".$this->color." ".$this->weight; 
        }
    }

    $apple = new B('apple', 'red, green', 50);

    $apple->intro();


?>