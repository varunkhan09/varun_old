<html>
<head><title></title></head>
<body>
<?php
include 'initscript.php';
echo "

<form method=\"POST\" action=\"newentrydone.php\">
<table>
<tr>
<td>Name</td>
<td><input type=\"text\" name=\"newname\"></td>
</tr>




<tr>
<td>Age</td>
<td><input type=\"text\" name=\"newage\"></td>
</tr>





<tr>
<td>Orientation</td>
<td><input type=\"radio\" name=\"orientradio\" value=\"Female\">Female<br><input type=\"radio\" name=\"orientradio\" value=\"Male\">Male<br><input type=\"radio\" name=\"orientradio\" value=\"Other\">Other</td>
</tr>





<tr>
<td>School</td>
<td><input type=\"text\" name=\"newschool\"></td>
</tr>





<tr>
<td>College</td>
<td><input type=\"text\" name=\"newcollege\"></td>
</tr>





<tr>
<td>Income</td>
<td><input type=\"text\" name=\"newincome\"></td>
</tr>




<tr>
<td>User ID</td>
<td><input type=\"text\" name=\"newuserid\"></td>
</tr>





<tr>
<td>Password</td>
<td><input type=\"password\" name=\"newpassword\"></td>
</tr>





<tr>
<td><input type=\"submit\" value=\"Submit Details\"></td>
<td><input type=\"reset\" value=\"Clear All Fields\"></td>
</tr>


</table>
</form>";





?>
</body>
</html>
