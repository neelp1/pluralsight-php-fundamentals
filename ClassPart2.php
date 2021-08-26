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
        return $this->firstName.PHP_EOL;
    }

    public function setFirstName($tempName){
        $this->firstName = $tempName;
    }

    public function getFullName(){
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends Person
{
    public $penName = "Legend";

    public function getPenName(){
        return $this->penName.PHP_EOL;
    }
}

// $myPerson = new Person("Samuel", "Clements", 1899);



echo $myPerson->getFullName();