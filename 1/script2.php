<html>
<head><title></title></head>

<body>
<?php

include 'script3.php';

$pwd = md5($_REQUEST["newpassword"]);

$query = "insert into LoginInfo values ('".$_REQUEST["newname"]."', '".$_REQUEST["newuserid"]."', '$pwd', '".$_REQUEST["newstate"]."')";
$flag = mysql_query($query);
if($flag)
echo "You have been Signed Up!! You can <a href=\"main.html\">Go Back</a> now.";

else
{
echo "Sign Up Unsuccessful : ".mysql_error();
echo "<br><br>You can <a href=\"main.html\">Go Back</a> and retry.";
die();
}

?>
</body>
</html>
