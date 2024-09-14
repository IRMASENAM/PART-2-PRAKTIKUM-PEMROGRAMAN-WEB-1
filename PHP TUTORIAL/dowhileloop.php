<!DOCTYPE html>
<html>
<body>

<?php  
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);
?>  

<?php  
$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);
?>

<p>As you can see, the code is executed once, even if the condition is never true.</p> 

<?php  
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
?>  

<?php  
$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);
?> 
</body>
</html>
