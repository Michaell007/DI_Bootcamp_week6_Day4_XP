<?php

    //Subset Of Another
    $myArray1 = Array(2, 4, 5, 7, 12, 9);
    $myArray2 = Array(2, 4);

    if ( array_intersect($myArray2, $myArray1) === $myArray2) {
        echo "second array is subset of first";
    } else {
        echo "Not a subset";
    }

?>