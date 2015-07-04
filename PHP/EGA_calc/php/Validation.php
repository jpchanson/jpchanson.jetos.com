<?php 
/**
* this class is responsible for making sure that variables are as they should be,
* i.e. dodgy chars are stripped, values are set so as not to produce errors etc.
**/
class Validation
{
    /**
    *  returns sanitised input if $input is not null, otherwise returns empty string
    **/
    public function calcInputCheck($input)
    {
        if(isset($_POST[$input]))
            {return $_POST[$input];} 
        else
            {return "";}
    }

    /**
    * sanitises value
    **/
    private function sanitise($value)
    {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }
}
?>