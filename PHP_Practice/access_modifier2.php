<?php
    class AccessModifier{
        public $name;
        private $gmail;
        

        public function __construct($name, $gmail){
            $this->name = $name;
            $this->gmail = $gmail;
        }

        public function getInfo(){
            echo $this->name." ==> ". $this->gmail;
        }
    }

    $newAMObj = new AccessModifier("Ariful", "asajib7654@gmail.com");

    $newAMObj->getInfo();
?>