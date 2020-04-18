<?php

    function splitArray($param) { 
        $param = (string) $param;
        $data = [];

        $index = 0;        

        for($i = 0; $i < strlen($param); $i++) {
            if($param[$i] == '0') {
                $index++;
                continue;
            }

            $data[$index][] = $param[$i];
        }

        return $data;
    }

    function divideByZero($arrays) {
        // foreach($array as $a) {
        //     usort($a, "comparePosition");
        //     foreach($a as $key => $number) {
        //         if($a[$minIndex] <= $number) {
        //             $res[$index][] = $number;
        //         } else {
        //             $index = $key;
        //         }
        //     }
        //     $index++;
        //     $minIndex = 0;
        // } Failed Code XD, built by me
        
        $arrays = $arrays;
        $res = "";
        for($a = 0; $a < count($arrays); $a++) {
            for($j = 0; $j < count($arrays[$a]); $j ++) {
                for($i = 0; $i < count($arrays[$a])-1; $i ++){
            
                    if($arrays[$a][$i] > $arrays[$a][$i+1]) {
                        $temp = $arrays[$a][$i+1];
                        $arrays[$a][$i+1]=$arrays[$a][$i];
                        $arrays[$a][$i]=$temp;
                    }       
                }
            }
            $res = $res . implode("", $arrays[$a]);
        }
        //Inspired from StackOverFlow, OMG thanks to StackOverFlow
        //ref: https://stackoverflow.com/questions/12409040/sorting-array-value-without-using-built-in-php-like-sort-etc/51353288

        return $res;
        
    }

    echo divideByZero(splitArray("5956560159466056"));    

?>