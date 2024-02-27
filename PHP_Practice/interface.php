<?php
    interface parent1 {
        function name($name);
    }

    interface parent2 {
        function personalInfo($age, $gender, $mobile);
    }

    interface parent3 {
        function ProfessionalInfo($designation, $salary);
    }

    class lifeStory implements parent1, parent2, parent3{
      public function name($n){
        echo "My name is ". $n ;
      }

      public function personalInfo($age, $gender, $mobile){
        echo " ==> "."This is PersonalInformation age : ".$age. " gender : ".$gender. " mobile : ".$mobile;
      }

      public function ProfessionalInfo($designation, $salary){
        echo " ==> "."This is Professional Information Designation is :" .$designation ."The salary is :".$salary;
      }
    }


    $sajib = new lifeStory();

    $sajib -> name("Ariful Islam Sajib");
    $sajib -> personalInfo(28, "Male", "01849737540") ;
    $sajib -> ProfessionalInfo("Software Engineer", "30000")   
?>