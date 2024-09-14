<!DOCTYPE html>
<html>
<body>

<?php  
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];
?>  

<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];
?> 

<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["model"];
echo "<br>";
echo $cars['model'];
?>
</body>
</html>