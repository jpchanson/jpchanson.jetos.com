<?php
/**
* Class is responsible to generating HTML elements
**/
class HTML_Gen
{
    /** a reference to the class that is creating the object **/
    protected $context;
    
    /**
    * creates the whole html page
    *TODO split this method into another class
    **/
    protected function __construct($context)
    {
        $this->context=$context;
    }
    /**
    * defines an HTML element
    * @param $tagName the type of element to create
    * @param $attributes the attributes contained in the opening tag
    * @param $payload the data to go between the opening and closing tags
    **/
    protected function element($tagName, $attributes, $payload)
    {
        return "<".$tagName." ".$attributes.">"
                .PHP_EOL.$payload.PHP_EOL
                ."</".$tagName.">". PHP_EOL;
    }       
}
?>