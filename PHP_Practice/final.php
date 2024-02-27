<?php
    final class a {
        public $name;
        public $age;

        public function __construct($n,$a)
        {
            $this->name = $n;
            $this->age = $a;
        }

        final public function getInfo(){
            echo "Name is : " .$this->name. " age is : " .$this->age;
        }
    }

    // class bnew extends a {
    //     public function getAge(){
    //         echo "Age is : " .$this->age;
    //     }

    //     // public function getinfo(){
    //     //     echo "something is wrong";
    //     // }
    // }

    // $obj2 = new bnew("Ariful Islam Sajib", "25");
    // $obj2->getInfo();

    $obj2 = new a("Ariful Islam Sajib", "25");
    $obj2->getInfo();
?>