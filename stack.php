<?php

/* Practical example about stack of exceptions done during class 03 "Interpreting a stack of exceptions" */


function f1() {
    echo ">F1 is before the exception"."<br/>";
}

function f2($int) {
    if(!is_int($int)) {
        throw new Exception("The argument is not of the expected type"."<br/>");
    } else {
        echo ">F2 is in the exception";
    }

    f3();
}

function f3() {
    echo ">F3 is after the exception"."<br/>";
}

f1();
f2(
    /* Entering a boolean type number to see the exception/error (line 27) */
    //int: 5.5
    int: 5
);