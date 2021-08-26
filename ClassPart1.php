<?php

class Person
{
    const AVG_LIFE = 65;
    
    public $firstName;
    public $lastName;
    public $yearBorn;

    function __construct($tempFirst = "", $tempSecond = "", $tempYear = ""){
        $this->firstName = $tempFirst;
        $this->lastName = $tempSecond;
        $this->yearBorn = $tempYear;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($tempName){
        $this->firstName = $tempName;
    }
}

// $myPerson = new Person();

// echo $myPerson->firstName."\n";

// $myPerson->firstName = "Morgan";

// echo $myPerson->firstName."\n";

// echo $myPerson::AVG_LIFE."\n";
// echo Person::AVG_LIFE."\n";

// $myPerson->setFirstName("Sammy");
// echo $myPerson->getFirstName()."\n";

$myPerson = new Person("Samuel", "Clements", 1899);
echo $myPerson->getFirstName()."\n";