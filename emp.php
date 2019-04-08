<?php
//The class was created for practicing OOP capabilities in practice!
class emp {

    private $name;
    private $age;
    
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function info() {
        echo 'Здравствуйте! Меня зовут <b>' . $this->name .'</b> ! <br />';
    }

    public function getAge() {
        if ($this->AgeCorrect($this->age)) {
            echo 'Мне '. $this->age . " Я совершеннолетний<br />";
        }else {
            echo 'Мне '. $this->age . " Я несовершеннолетний<br />";
        }
    }

    public function setAge($newAge) {
        if( $this->AgeCorrect($newAge) ){
        $this->age = $newAge;
        } else { return; }
    }

    private function AgeCorrect($age) {
        return $age >= 18 and $age <= 100; 
    }
 
}