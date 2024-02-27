<?php
    trait HelperFunction {
        public function getMessage(){
            echo "Hello Trait Is working";
        }
    }


    class TestA {
        use HelperFunction;
    }

    $TraitObj = new TestA();
    $TraitObj ->getMessage();
?>