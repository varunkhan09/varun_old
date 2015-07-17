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
echo "Login Successful.";
}
else
echo "Login Failed! Wrong Password.";
}

else
echo "Wrong User Name!";

?>
</body>
</html>