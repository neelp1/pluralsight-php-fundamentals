<?php

$some_arr = array("batnan", "charlie", "wonder");

array_push($some_arr, "Marge");

$some_arr[] = "Greg";

print_r($some_arr);

$lastVal = array_pop($some_arr);

echo $lastVal;

print_r($some_arr);

unset($some_arr[1], $some_arr[2]);

print_r($some_arr);