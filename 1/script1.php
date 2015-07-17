<html>
<head><title></title></head>


<body>
<?php
$parsedpwd = md5($_REQUEST["password"]);
$attributes = array("Your Name","Your User ID","Your State");
$i=0;
include 'script3.php';
echo "<br><br>";
$query = "select pass from LoginInfo where UserID= '".$_REQUEST["userid"]."'";

$result = mysql_query($query);

if(mysql_num_rows($result)!=0)
{
while($row = mysql_fetch_assoc($result))
{
if($parsedpwd == $row['pass'])
{
echo "Login Successful!! You can <a href=\"main.html\">Go Back</a> now.<br><br><br>";

$query1 = "select name,userid,state from LoginInfo where UserID='".$_REQUEST["userid"]."'";
$result1 = mysql_query($query1);
$resultrow = mysql_fetch_row($result1);
echo "<table>";
for($i=0; $i<mysql_num_fields($result1); $i++)
{
echo "
<tr>
<td>$attributes[$i] : </td>
<td>$resultrow[$i]<br></td>
</tr>";
}
echo "
<tr>
<td><input type=\"submit\" value=\"Change Details\"></td>
<td><input type=\"submit\" value=\"Change Password\"></td>
</table>";
}
else
{
echo "Login Failed...<a href=\"main.html\">Go Back</a> and Retry.";
}
}
}

else
{
echo "Wrong User ID entered...<a href=\"main.html\">Go Back</a> and Retry....";
}
?>
</body>
</html>