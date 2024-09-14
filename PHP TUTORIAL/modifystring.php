<!DOCTYPE html>
<html>
<body>

<?php
$x = "Hello World!";
echo strtoupper($x);
?> 

<?php
$x = "Hello World!";
echo strtolower($x);
?>

<?php
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
?> 

<?php
$x = "Hello World!";
echo strrev($x);
?> 

<?php
$x = " Hello World! ";
echo trim($x);
?> 

<p>The whitespaces are invisible in plain HTML,<br>
but check out the difference in two input fields:</p>

<?php
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
?> 

<?php
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);
?> 
</body>
</html>
