<?php

require_once( 'interface.php' );

class myClass implements myinterface 
{
    public $from_inp;
    public function setValue()
    {
        if ( isset( $_POST[ 'out' ] ) && !empty( $_POST[ 'inpval' ] ) )   {
            $this->from_inp = intval($_POST[ 'inpval' ]);
        } elseif ( isset( $_POST[ 'out' ] ) && empty( $_POST[ 'inpval' ] ) ) {
            echo 'Вы установили значение но ничего не ввели';    
        } else {
            return;
        }
    }

    public function getValue( $from_inp )
    {
        
        if ( !empty( $this->from_inp ) ) {
            echo '<p>Вы ввели значение ' . $this->from_inp . "!</p>"; 
        } else { 
            return; 
        }
        
    }

    public function deleteValue()
    {
        unset($_POST['inpval']);
    }

}