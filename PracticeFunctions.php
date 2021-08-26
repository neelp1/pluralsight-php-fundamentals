<?php

function someFunction()
{
    echo "this is a string\n";
}

someFunction();

function someParsing($someVar)
{
    echo $someVar;
}

someParsing("gsgw\n");

function standardPar($standVar = 2352)
{
    echo $standVar;
}

standardPar();

$functionVar = "standardPar";

$functionVar();

//global vars
$authorName = "Will";

function setAuthName(){
    global $authorName;
    $authorName = "Charles";
}

setAuthName();

echo $authorName;