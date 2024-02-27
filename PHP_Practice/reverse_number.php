<?php  
    function reverse($n){
        $num = $n; 
        $reverse = 0; 

        while($num > 1){
            $rem = $num % 10;
            $reverse = ($reverse * 10) + $rem;

            $num = ($num / 10);
        }

        echo $reverse;
    }

    reverse(122);
?>

