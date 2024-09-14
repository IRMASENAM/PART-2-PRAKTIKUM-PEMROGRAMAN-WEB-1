<!DOCTYPE html>
<html>
<body>

<?php  
$x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction()
?>  

<?php  
$x = 100;

echo $GLOBALS["x"];
echo $x;
?>  
</body>
</html>