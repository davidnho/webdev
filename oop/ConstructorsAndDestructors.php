<!--
source : http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762
This script covers the following topics:
    Magic Methods in OOP (__contruct/__destruct)
        Using Constructors and Destructors
        Converting to a String
    
-->
<?php
 
class MyClass
{
  public $prop1 = "I'mass property!";
 
  public function __construct()
  {
      echo 'The class "', __CLASS__, '" was initiated!<br />';
  }
 
  public function __destruct()
  {
      echo 'The class "', __CLASS__, '" was destroyed.<br />';
  }
 
  public function __toString()
  {
      echo "Using the toString method: ";
      return $this->getProperty();
  }
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
 
// Create a new object
$obj = new MyClass;
 
// Get the value of $prop1
echo $obj->getProperty();
 
// Output the object as a string
echo $obj;
 
// Destroy the object
unset($obj);
 
// Output a message at the end of the file
echo "End of file.<br />";
 
?>