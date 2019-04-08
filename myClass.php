<?php

class myClass implements myinterface //The class that performs the functions of the interface myInterface
{
    public $from_input; // Form variable
    public function setValue() // Setter, sets the value when executing the function.
    {
        if ( isset( $_POST[ 'out' ] ) && !empty( $_POST[ 'inputvalue' ] ) )   { // If the value is not empty and the install button is pressed!
            $this->from_input = intval($_POST[ 'inputvalue' ]); // Write the value of the variable
        } elseif ( isset( $_POST[ 'out' ] ) && empty( $_POST[ 'inputvalue' ] ) ) { // If the value is empty
            echo 'You set the value but did not enter anything.'; // Display the message "value is empty";
        } else {
            return;
        }
    }

    public function getValue( $from_input ) // Getter accepts a variable set in the setter.
    {
        
        if ( !empty( $this->from_input ) ) { 
            echo '<p>You entered a value ' . $this->from_input . "!</p>"; // Display messages
        } else { 
            return; 
        }
        
    }

    public function deleteValue() //Method that removes the value of a variable.
    {
        unset( $from_input );
    }

}