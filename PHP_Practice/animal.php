<?php
    namespace Animals;
    include_once "cat.php";
    include_once "dog.php";




    $cat = new Cat();
    $cat->Greet();

    $dog = new Dog();
    $dog->Greet();
?>