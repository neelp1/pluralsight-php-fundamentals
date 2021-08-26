<?php

$authors = array(
    "charles",
    "Jane",
    "William",
    "Mark",
    "Louisa"
);

$authorsAssociative = array(
    "poet" => "William",
    "brilliant" => "Jane",
    "quarky" => "Charles"
);

sort($authors);
print_r($authors);

asort($authorsAssociative);
print_r($authorsAssociative);

ksort($authorsAssociative);
print_r($authorsAssociative);

echo count($authors);

echo count($authors, COUNT_RECURSIVE);

foreach($authors as $key => $val)
{
    echo $key.": ".$val."\n";
}

$multiArray = array(
    "Male" => array(
        "Charles" => array("Christmas", "Oliver"),
        "William" => array("Romeo", "Hamlet")
    ),
    "Female" => array(
        "Bronte" => array("Wuthering", "Charlotte"),
        "Montgomery" => array("Gables", "Avonlea")
    )
);

print_r($multiArray);

print_r($multiArray['Male']['Charles'][0]);