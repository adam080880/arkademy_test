<?php

    function createTri($count)
    {
        $space = $count;
        $star = 1;
        for($row = 0; $row < $count; $row++)
        {
            for($spaceI = $space; $spaceI > 0; $spaceI--) {
                echo " ";
            }            
            $space--;

            for($starI = 0; $starI < $star; $starI++) {
                echo "*";
            }
            $star += 2;

            echo "\n";
        }
    }

    createTri(5);

?>