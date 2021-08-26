<?php
    $someArr = array("one","two","three");

    print_r($someArr);

    $anotherArr = ["first","second","third"];

    print_r($anotherArr);

    print_r([1,true,"house"]);

    //associative
    $associativeArr = array(
        "house" => "mansion",
        "workplace" => "farm",
        "car" => "datsun",
        6 => "six",
        "seven"
    );

    print_r($associativeArr);

    echo $someArr[1];
    echo $associativeArr["car"];

    echo("\n");

    echo array_key_exists("workplace", $associativeArr);

    echo in_array("mansion", $associativeArr);

    echo in_array("seven", $associativeArr, true);

?>