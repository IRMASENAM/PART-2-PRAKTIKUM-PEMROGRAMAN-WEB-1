<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
$y = 6;

echo $x + $y;
?>  

<?php
$x = 20;  
$x += 100;

echo $x;
?> 

<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal
?> 

<?php
$x = 10;  
echo $x++;
?>  
</body>
</html>