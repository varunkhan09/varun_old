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
$parsedpass = md5($_REQUEST["password"]);
$query = "select pass from logininfo where userid='".$_REQUEST["userid"]."'";
$result = mysql_query($query);

if(mysql_num_rows($result)!=0)
{
$resultset = mysql_fetch_row($result);

if($resultset[0]==$parsedpass)
{
$query = "select name, userid,state from logininfo";
$result = mysql_query($query);

$no_rows = mysql_num_rows($result);
$no_fields = mysql_num_fields($result);

$counter=0;

echo "<table id=\"datatable\">";
echo "<tbody>";
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

echo "<tr id=\"modifyme\">";
//</tr>
//echo "</tbody>";
//echo "</table>";

}
else
echo "Login Failed! Wrong Password.";
}

else
echo "Wrong User Name!";

?>
</body>
</html>