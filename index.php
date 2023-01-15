<?php

/* Practical class on exception handling with RangeException and other native PHP features*/

function division($dividend, $divider) {

    try {
        if ($divider == 0) {
            throw new RangeException("The number cannot be divided by zero");
        }

        $result = $dividend/$divider;

        echo "Result: " .$result;
    } catch(Exception) {
        // echo $e->getMessage();
        echo "The number cannot be divided by zero";
    }
    finally {
        echo "<br/>Handling exceptions!";
    }
}

/* Enter the divisor being 0 to see the exception on screen */
//division(10, 0);

division(10, 2);