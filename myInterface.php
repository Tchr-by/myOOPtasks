<?php
// Interface Pref
interface myinterface 
{
    const MY_CONST = 'Const';  //interface constant
    
    public function setValue(); //Setter, checks and sets the value. More in the class file "myClass.php"
    public function getValue( $from_input ); // Getter, displays the data entered in the input. More in the class file "myClass.php"
    public function deleteValue(); // Removes a variable entered into the input.

}