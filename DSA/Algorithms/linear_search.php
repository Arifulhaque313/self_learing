<?php
    class Searching{
        public $array; 
        public $find;

        public function linearSearch($array, $find){
            $this->array = $array;
            $this->find = $find;

            for($i = 0; $i < count($array); $i++){
                if($array[$i] == $find){
                    echo  $i;
                }
            }
            
            return -1;
        }

        public function BinarySearch($array, $find){
            $this->array = $array;
            $this->find = $find;

            $length = count($array);
            $left = 0;
            $right = $length-1;

            

            while($left<=$right){
                $mid = intval(($left+$right)/2);
                if($array[$mid] == $find){
                    echo $mid;
                }
                if($array[$mid] < $find){
                    $left = $mid+1;
                }
                else{
                    $right= $mid-1;
                }
            }
            return -1;
        }
    }


    $newSearching = new Searching();
    $newSearching->linearSearch([2,3,4,5,1], 1);
    $newSearching->BinarySearch([1,4,6,8,9,12,15], 6);

?>