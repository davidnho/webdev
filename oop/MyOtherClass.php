<!--
source : http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762
This script covers the following topics:
    Using Class Inheritance
        Preserving Original Method Functionality While Overwriting Methods
    
-->

<?php
include ("MyClass_Parent.php");
class MyOtherClass extends MyClass
{
  public function __construct()
  {
      parent::__construct(); // Call the parent class's constructor
      echo "A new constructor in " . __CLASS__ . ".<br />";
  }
 
  public function newMethod()
  {
      echo "From a new method in " . __CLASS__ . ".<br />";
  }
}
 
// Create a new object
$newobj = new MyOtherClass;
 
// Output the object as a string
echo $newobj->newMethod();
 
// Use a method from the parent class
echo $newobj->getProperty();

?>