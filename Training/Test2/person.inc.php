<?php

class Person {
    // Properties
    public $name;
    public $eyecolor;
    public $age;



    // Methods
    public function setName($name){
    $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

class NewClass
{
    //Properties and Methods goes here!
    public $data = "I am a property";

    public function __construct()
    {
        echo "This class has been istantiated <br>";
    }
    
    public function setNewProperty($newdata)
    {
        $this->data;
    }

    public function getProperty()
    {
        return $this->data;
    }

    public function __destruct()
    {
        echo "<br> This is the end of the class!";
    }

}

?>