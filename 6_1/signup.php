<html>
<body>
<?php
include 'initscript.php';

$parsedpass = md5($_REQUEST["newpassword"]);

$query = "insert into logininfo values ('".$_REQUEST["newname"]."', '".$_REQUEST["newuserid"]."', '$parsedpass', '".$_REQUEST["newstate"]."')";
$flag = mysql_query($query);

if($flag)
{
echo "<tr id=\"modifyme\">";
echo "<td>".$_REQUEST["newname"]."</td>";
echo "<td>".$_REQUEST["newuserid"]."</td>";
echo "<td>".$_REQUEST["newstate"]."</td>";
echo "</tr>";
}

else
echo "<tr><td>Sign Up Unsuccessful : ".mysql_error()."</td></tr>";
?>
</body>
</html>