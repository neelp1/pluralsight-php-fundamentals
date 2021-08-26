<?php

$boolgerg = true;

var_dump($boolgerg);

$numbool = "";

var_dump((bool)$numbool);

define('NEW_CONST', "This is a const");

echo NEW_CONST;

$intVar = 453;
$boolVar = true;

//echo is_int($intVar);
//echo is_int($boolVar);
// nothing outputed if false

//echo is_bool($boolVar);

echo defined('NEW_CONST');


