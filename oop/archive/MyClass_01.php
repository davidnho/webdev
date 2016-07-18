<!--
source : http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762
This script covers the following topics:
    Recognizing the Differences Between Objects and Classes
    Structuring Classes
    Defining Class Properties
    Defining Class Methods
-->
<?php
 
class MyClass
{
    public $prop1 = "I'm a class property!";
    
    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }
    
    public function getProperty()
    {
        return $this->prop1 ."</br>";
    }
}
 

// Create two objects
$obj = new MyClass;
$obj2 = new MyClass;
 
// Get the value of $prop1 from both objects
echo $obj->getProperty();
echo $obj2->getProperty();
 
// Set new values for both objects
$obj->setProperty("I'm a new property value!");
$obj2->setProperty("I belong to the second instance!");
 
// Output both objects' $prop1 value
echo $obj->getProperty();
echo $obj2->getProperty();
 
?>