<?php
    function generateMatrix($ordo) {
        $matrix = [];

        for($row = 0; $row < $ordo; $row++) {
            for($col = 0; $col < $ordo; $col++) {
                $matrix[$row][$col] = rand(1, 99);
                echo $matrix[$row][$col] . " ";
            }
            echo "\n";
        }

        return $matrix;
    }

    function createMatrix($ordo) {

        if($ordo < 2) {
            return false;
        }

        $data = generateMatrix($ordo);
        // $data = [
        //     [
        //         3,9,12
        //     ],
        //     [
        //         10,37,81
        //     ],
        //     [
        //         91,5,44
        //     ]
        // ];       //just for testing XD 

        $sum = 0;

        // Sum diagonal matrix left to bottom right
        for($leftToBottomRight = 0; $leftToBottomRight < $ordo; $leftToBottomRight++) {
            echo $data[$leftToBottomRight][$leftToBottomRight]." + ";
            $sum += $data[$leftToBottomRight][$leftToBottomRight];            
        }        

        // Sum diagonal matrix right to bottom left
        for($bottomLeftToTopRight = $ordo-1, $index = 0; $bottomLeftToTopRight >= 0, $index < $ordo; $bottomLeftToTopRight--, $index++) {
            echo $data[$bottomLeftToTopRight][$index];
            echo ($index == $ordo-1) ? "\n" : " + ";
            $sum += $data[$bottomLeftToTopRight][$index];            
        }        

        return $sum;
    }

    echo "Hasil: " . createMatrix(3);
?>