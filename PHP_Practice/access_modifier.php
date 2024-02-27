<?php
    Class AccessModifyer{
        public $name;
        public $age;
        public $mobile;


        public function get_name($n){
            $this->name = $n;
            echo $this->name; 
        }

        protected function get_age($n){
            $this->age = $n;
            echo $this->age;
        }

        private function get_mobile($n){
            $this->mobile = $n;
            echo $this->mobile;
        }

        public function set_age($n){
            $this->get_age($n);
        }
    }


    $newAccess = new AccessModifyer;

    $newAccess -> get_name("hello");

    // $newAccess -> get_age("Ariful");

    // $newAccess -> get_mobile("01849737540");

?>