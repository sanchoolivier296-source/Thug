<!DOCTYPE html>
<html>
<head>
<title>her name</title>
</head>
<body>
 <h1>
<?php 
$name="mUGISHA eric";
$name=trim($name);
$name=strtolower($name);
$name=ucwords($name);
echo"$name";
?>
</h1>
<?php
$length=strlen($name);
echo"length:$length";
?>
</body>
</html>