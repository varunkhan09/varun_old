<html>
<head></head>


<body>
<?php
$con = mysql_connect("localhost", "root", "password") or die("Could not connect to MySQL : ". mysql_error());

$query = "create database varun_db";
$flag = mysql_query($query);

/*
if($flag)
echo "Created database varun_db";

else
echo mysql_error();


echo "<br><br>";
*/

$flag = mysql_select_db("varun_db");

/*
if($flag)
echo "varun_db as database has been selected.";

else
echo "Could not select varun_db as database : ".mysql_error();

echo "<br><br>";


$query = "create table LoginInfo (name varchar(60), userid varchar(20) primary key, pass varchar(600), state varchar(60))";
$flag = mysql_query($query);


if($flag)
echo "Created table LoginInfo";

else
echo "Could not create the table : ".mysql_error();
echo "<br><br>";
*/

?>

</body>
</html>
