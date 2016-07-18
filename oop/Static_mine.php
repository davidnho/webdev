<?php
class MyClass{
	public static $yname = "Noel";
	public static $yage = "40";
	public static $counter = 0;
	public function getAge(){
		return self::$yage;
	}
	public static function addOne(){
		return ++self::$counter ."<br/>";
	}
}

echo "Your name : " . MyClass::$yname ."<br/>";
echo "Your age is " . MyClass::getAge() ."<br/>";
do
{
	echo MyClass::addOne();
} while (MyClass::$counter<10);

?>