<html>
<head><title></title></head>


<body>
<?php
$con = mysql_connect("localhost", "root","password") or die("Could not connect to MySQL : ". mysql_error());

$query = "create database varun_db";
$flag = mysql_query($query);


if($flag)
echo "Created database varun_db";

else
echo mysql_error();

echo "<br><br>";


$flag = mysql_select_db("varun_db");


if($flag)
echo "varun_db as database has been selected.";

else
echo "Could not select varun_db as database : ".mysql_error();

echo "<br><br>";


$query = "create table DetailsTable (Name varchar(60), Age int, Orientation varchar(6), School varchar(30), College varchar(30), Income varchar(20), UserId varchar(20) primary key, password varchar(600))";
$flag = mysql_query($query);


if($flag)
echo "Created table DetailsTable";

else
echo "Could not create the table : ".mysql_error();
echo "<br><br>";


?>

</body>
</html>
