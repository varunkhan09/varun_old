<html>
<head></head>

<body>
<?php
include 'initscript.php';

$parsedpass = md5($_REQUEST["password"]);

$query = "insert into Detailstable1 values ('".$_REQUEST["name"]."','".$_REQUEST["birthday"]."','".$_REQUEST["address"]."','".$_REQUEST["state"]."','".$_REQUEST["orientation"]."','".$_REQUEST["interests"]."','".$_REQUEST["ids"]."','".$_REQUEST["department"]."','".$_REQUEST["salary"]."','".$_REQUEST["username"]."','$parsedpass')";

$flag=mysql_query($query);


if($flag)
echo "Details Entered Successfully.";

else
echo "Details could not be entered : ".mysql_error();

?>
</body>
<html>