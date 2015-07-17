<html>
<head><title></title></head>

<style type="text/css">

.cls1
{
background-color:blue;
}

.cls2
{
background-color:grey;
}

.cls3
{
background-color:green;
}

</style>




<body>

<form method="POST" action="newentry.php">
<input type="submit" value="Enter New Entry">
</form>



<form method="POST" action="editentry.php">
<input type="submit" value="Edit An Entry">
</form>



<form method="POST" action="generateentry.php">
	<input type="text" name="number">
	<input type="submit" value="Autogenerate Entries">
</form>



<form method="POST" action="deleteentry.php">
<input type="submit" value="Delete Entries">
</form>





<?php
include 'initscript.php';

$query = "select * from DetailsTable";
$result = mysql_query($query);

$no_rows = mysql_num_rows($result);
$no_fields = mysql_num_fields($result);

$counter=0;

echo "<table>";
echo "<tr class=\"cls3\">";
for($x=0; $x<$no_fields; $x++)
{
echo "<td>".mysql_field_name($result,$x)."</td>";
}
echo "</tr>";

while($row = mysql_fetch_row($result))
{

if($counter%2==0)
echo "<tr class=\"cls1\">";

else
echo "<tr class=\"cls2\">";

for($x=0; $x<$no_fields; $x++)
{
echo "<td>".$row[$x]."</td>";
}
echo "</tr>";
$counter++;
}

echo "</table>";
?>
</body>
</html>
