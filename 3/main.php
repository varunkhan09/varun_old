<html>
<head><title></title></head>


<body>
<?php
include 'initscript.php';

$query1 = "select * from detailstable";
$result = mysql_query($query1);

$query2 = "create table CopiedDetailsTable (Name varchar(60), Age int(2), Orientation varchar(6), School varchar(30), College varchar(30), Income varchar(20), UserId varchar(20) primary key, password varchar(600))";
$flag = mysql_query($query2);

if($flag)
echo "Created table CopiedDetailsTable.<br><br>";

else
echo "Could not create table CopiedDetailsTable : ".mysql_error();



//$no_fields = mysql_num_fields($result);
$arr=array();
$no_fields = 0;
$no_fields = mysql_num_fields($result);

while($row = mysql_fetch_row($result))
{
for($x=0; $x<no_fields; $x++)
{
$arr['UserId'][$x] = $row[$x];
echo print_r($arr);
echo "<br><br>";
}
//$query3 = "insert into copieddetailstable values ('".$row[0]."', $row[1], '".$row[2]."', '".$row[3]."', '".$row[4]."', '".$row[5]."', '".$row[6]."', '".$row[7]."')";

/*
$query3 = "insert into copieddetailstable values ('".$arr[0]."', $arr[1], '".$arr[2]."', '".$arr[3]."', '".$arr[4]."', '".$arr[5]."', '".$arr[6]."', '".$arr[7]."')";

$flag = mysql_query($query3);

if(!$flag)
echo "This query did not executed...";
*/
}

?>
</body>
</html>