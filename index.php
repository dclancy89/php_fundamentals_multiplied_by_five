<?php

function multiply($arr, $num = 5) {
    $newArr = [];
    for($i = 0; $i < count($arr); $i++) {
        array_push($newArr, ($arr[$i] * $num));
    }

    return $newArr;
}

$array1 = [2, 4, 10, 16];

$array2 = multiply($array1);

var_dump($array2);

$array3 = multiply($array1, 2);

var_dump($array3);

