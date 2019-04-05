<?php

class firstClass
{
    public $firstValue;


    public function __construct(string $firstValue) {
        $this->firstValue = $firstValue;
    }
    
    public function getVal() {
        return $this->firstValue;
    }

}


class connect {
    public $param;

    public function __construct(firstClass $config) {
        $this->param = $config;
    }

    public function val() {
        return $this->param->getVal();
    }
}
