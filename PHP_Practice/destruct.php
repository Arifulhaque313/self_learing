<?php
    class person{
        public $name;
        public $email;
        public $phone;

        function __construct($name, $email, $phone){
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }

        function __destruct()
        {
            echo "This persons information is,  Name ==> ".$this->name. ", Email ==> ".$this->email. ", Phone ==> ".$this->phone;
        }
    }

    $apel_sarkar = new person("Apel sarkar", "apel@adventureltd.com", '01849737540');
?>