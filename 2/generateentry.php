<html>
<head><title></title></head>
<body>
	
	
<?php
include 'initscript.php';

for($i=0; $i<$_REQUEST["number"]; $i++)
{
	$parsedpass = md5($i);
	$query = "insert into DetailsTable values ('name".($i+1)."',$i,'Female','school".($i+1)."','college".($i+1)."', '".($i).",00,000', 'user".($i)."', '$parsedpass')";
	$flag = mysql_query($query) or die(mysql_error());
	
	if($flag)
	echo "Operation Successful...";
	
	else
	echo "Operation Unsuccessful...";
	
	echo "<br>";
	
}

?>
<br><br>
<a href="main.php">Go Back</a>
</body>
</html>
