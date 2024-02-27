<?php
    class Car{
        public $name;
        public $model;
        public $wheel;

        // methods 
        function set_name($name){
            $this->name = $name;
        }

        function set_model($model){
            $this->model = $model;
        }

        function set_wheel($wheel){
            $this->wheel = $wheel;
        }

        function set_info($name, $model, $wheel){
            $this->name = $name;
            $this->model = $model;
            $this->wheel = $wheel;
        }


        // getting data functions 
        function get_name(){
            return $this->name;
        }
        
        function get_model(){
            return $this->model;
        }

        function get_wheel(){
            return $this->wheel;
        }

        function get_info(){
            return "Name " . $this->name."  Model ". $this->model. " Haveing ". $this->wheel;
        }
    }


    $toyota = new Car();
    $toyota->set_name("Toyota Allian");
    $toyota->set_model(2012);
    $toyota->set_wheel(4);

    // var_dump($toyota->get_info());
    // $array = [1,2,34,5];
    // echo($array[1]);

    var_dump($toyota instanceof Car);
?>