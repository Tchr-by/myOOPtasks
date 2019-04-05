<?php
interface myinterface
{
    const MY_CONST = 'Константа';
    
    public function setValue();
    public function getValue( $from_inp );
    public function deleteValue();

}