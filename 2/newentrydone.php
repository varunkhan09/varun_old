<html>
<head><title></title></head>
<body>
<?php
include 'initscript.php';

$parsedpass=md5($_REQUEST["newpassword"]);

$query = "insert into DetailsTable values ('".$_REQUEST["newname"]."',".$_REQUEST["newage"].",'".$_REQUEST["orientradio"]."','".$_REQUEST["newschool"]."','".$_REQUEST["newcollege"]."', '".$_REQUEST["newincome"]."','".$_REQUEST["newuserid"]."', '$parsedpass')";

$flag = mysql_query($query);
	
	if($flag)
	echo "Entry has been made...<a href=\"main.php\">Go Back</a>";

else
echo "Some Error Occurred : ".mysql_error();

?>
</body>
</html>
