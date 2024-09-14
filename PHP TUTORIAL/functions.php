<!DOCTYPE html>
<html>
<body>

<?php
function myMessage() {
  echo "Hello world!";
}

myMessage();
?> 

<?php
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
</body>
</html>