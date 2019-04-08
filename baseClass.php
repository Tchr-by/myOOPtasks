<?php
//Base class with which connection will be established.
class baseClass
{
    public $baseValue;


    public function __construct(string $basetValue) { //Constructor accepting a class variable
        $this->baseValue = $basetValue;
    }
    
    public function getVal() { //Method that returns the value of a class variable (Getter)
        return $this->baseValue;
    }

}
