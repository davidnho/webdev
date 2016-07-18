<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

print_r($cars);
echo "<br>";

for($x = 0; $x <  $arrlength; $x++) {
     echo $cars[$x];
     echo "<br>";
}
?>

</body>
</html>