<html>

<head>
<style type="text/css">

.cls1
{
background-color:pale;
}

.cls2
{
background-color:aqua;
}

.cls3
{
background-color:yellow;
}
</style>
</head>

<body>
<?php
include 'initscript.php';

$query = "select name, userid,state from logininfo";
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