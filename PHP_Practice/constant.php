<?php
    class Example {
        const text = "Hello world!";

        public function getInfo(){
            echo self::text;
        }
    }

    $obj3 = new Example();

    $obj3->getInfo();
?>