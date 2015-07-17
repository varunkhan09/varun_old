<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>


<script>


$('#salary').change(function() {
$('#salaryvalue').val=$('#salary').val();}
);


$(document).ready(function() {
$('#previewB').click(function() 
{
var Jname = $('#name').val();

var Jbirthday = $('#birthday').val();

var Jaddress = $('#address').val();

var Jstate = $('#state').val();

var Jorientation = $('[name="orientradio"]:checked').val();

var Jinterests="";
if($('#interestscheck1').is(':checked'))
Jinterests+=$('#interestscheck1').val();
if($('#interestscheck2').is(':checked'))
{
Jinterests+=",";
Jinterests+=$('#interestscheck2').val();
}
if($('#interestscheck3').is(':checked'))
{
Jinterests+=",";
Jinterests+=$('#interestscheck3').val();
}
if($('#interestscheck4').is(':checked'))
{
Jinterests+=",";
Jinterests+=$('#interestscheck4').val();
}

var Jidd = new Array();
$( ".idlistclass" ).each(function( index ) {
if($(this).is(':selected')) 
Jidd.push($(this).attr('value'));
});
var Jids = "";
$.each(Jidd, function( index, value ) {
Jids+=value+",";
});



var Jdepartment = $('[name="departmentradio"]:checked').val();
var Jsalary = $('#salary').val();
var Jusername = $('#username').val();
var Jpassword = $('#password').val();
var Jgender="";
var Jgender1="";

var str=Jids;

if(Jorientation=="Male")
{
Jgender="He";
Jgender1="His";
}

else if(Jorientation=="Female")
{
Jgender="She";
Jgender1="Her";
}
else
{Jgender=Jname;
Jgender1=Jname;
}

str += Jname+" is a new member in team Flaberry. "+Jgender+" lives in "+Jaddress+", "+Jstate+". "+Jgender+" was born on "+Jbirthday+". "+Jgender+" loves "+Jinterests+". "+Jgender+" has been assigned to "+Jdepartment+" Department. "+Jgender1+" salary is "+Jsalary+". "+Jgender1+"'s User name is : "+Jusername+" and Password is : "+Jpassword;

$('#resultdiv').html(str);}
);
});





$(document).ready(function() {
$('#insertB').click(function() 
{
var Jname = $('#name').val();
var Jbirthday = $('#birthday').val();
var Jaddress = $('#address').val();
var Jstate = $('#state').val();
var Jorientation = $('[name="orientradio"]:checked').val();


var Jinterests="";
if($('#interestscheck1').is(':checked'))
Jinterests+=$('#interestscheck1').val();
if($('#interestscheck2').is(':checked'))
{
Jinterests+=",";
Jinterests+=$('#interestscheck2').val();
}
if($('#interestscheck3').is(':checked'))
{
Jinterests+=",";
Jinterests+=$('#interestscheck3').val();
}
if($('#interestscheck4').is(':checked'))
{
Jinterests+=",";
Jinterests+=$('#interestscheck4').val();
}


var Jidd = new Array();
$( ".idlistclass" ).each(function( index ) {
if($(this).is(':selected')) 
Jidd.push($(this).attr('value'));
});
var Jids = "";
$.each(Jidd, function( index, value ) {
Jids+=value+",";
});


var Jdepartment = $('[name="departmentradio"]:checked').val();
var Jsalary = $('#salary').val();
var Jusername = $('#username').val();
var Jpassword = $('#password').val();




$.ajax({
url:'insert.php',
type:'post',
data:{
'name':Jname,
'birthday':Jbirthday,
'address':Jaddress,
'state':Jstate,
'orientation':Jorientation,
'interests':Jinterests,
'ids':Jids,
'department':Jdepartment,
'salary':Jsalary,
'username':Jusername,
'password':Jpassword},
success:function(message){
$('#resultdiv').html(message);}
});
}
);
});
</script>

</head>


<body>

<table align="center">

<tr>
<td>Name</td>
<td><input type="text" id="name"></td>
</tr>

<tr>
<td>Birth Date</td>
<td><input type="date" id="birthday"></td>
<tr>

<tr>
<td>Address</td>
<td><textarea cols="25" rows="5" id="address"></textarea></td>
</tr>

<tr>
<td>State
</td>
<td>

<select id="state">
<option value='0'>---State---</option>
<?php
$indian_states = array (
 'Andhra Pradesh',
 'Arunachal Pradesh',
 'Assam',
 'Bihar',
 'Chhattisgarh',
 'Delhi',
 'Goa',
 'Gujarat',
 'Haryana',
 'Himachal Pradesh',
 'Jammu & Kashmir',
 'Jharkhand',
 'Karnataka',
 'Kerala',
 'Madhya Pradesh',
 'Maharashtra',
 'Manipur',
 'Meghalaya',
 'Mizoram',
 'Nagaland',
 'Odisha',
 'Punjab',
 'Rajasthan',
 'Sikkim',
 'Tamil Nadu',
 'Tripura',
 'Uttarakhand',
 'Uttar Pradesh',
 'West Bengal',
);
for($x=0; $x<29; $x++)
{
echo "<option value='$indian_states[$x]'>$indian_states[$x]</option>";
}



?>
</select>



</td>
</tr>

<tr>
<td>Orientation</td>
<td>
<input type="radio" name="orientradio" value="Female" id="Female"> Female<br>
<input type="radio" name="orientradio" value="Male" id="Male"> Male<br>
<input type="radio" name="orientradio" value="Other" id="Other"> Other<br>
</td>
</tr>

<tr>
<td>Your Interests/Hobbies</td>
<td>
<input type="checkbox" name="interestscheck1" id="interestscheck1" value="Music"> Music<br>
<input type="checkbox" name="interestscheck2" id="interestscheck2" value="Coding"> Coding<br>
<input type="checkbox" name="interestscheck3" id="interestscheck3" value="Yoga"> Yoga<br>
<input type="checkbox" name="interestscheck4" id="interestscheck4" value="Cycling"> Cycling<br>

</td>
</tr>

<tr>
<td>What all IDs you have ?</td>
<td>
<div id="iddiv">
<select size="5" multiple>
<option class="idlistclass" id="list1" value="Voter ID Card">Voter ID Card</option>
<option class="idlistclass" id="list2" value="Driving Licence">Driving Licence</option>
<option class="idlistclass" id="list3" value="PAN Card">PAN Card</option>
<option class="idlistclass" id="list4" value="Passport">Passport</option>
<option class="idlistclass" id="list5" value="Adhaar Card">Adhaar Card</option>
</select>
</div>
</td>
</tr>

<tr>
<td>What department have you<br>been assigned in Flaberry ?</td>
<td>
<input type="radio" name="departmentradio" value="HR Department" id="HRD">HR Department<br>
<input type="radio" name="departmentradio" value="Customer Support Team" id="ST">Customer Support Team<br>
<input type="radio" name="departmentradio" value="Technical Support" id="TS">Technical Support<br>
<input type="radio" name="departmentradio" value="Other" id="O">Other<br>
</td>
</tr>


<tr>
<td>What is your Salary ?<br>(Per Month) </td>
<td>8,000<input type="range" id="salary" min="8000" max="100000">1,00,000<br><br><br>
<label for="salary" id="salaryvalue" value="8,000"></label>
</td>
</tr>


<tr>
<td>Select a User Name</td>
<td><input type="text" id="username"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" id="password"></td>
</tr>

<tr>
<td><input type="button" value="Preview the Entries" id="previewB"></td>
<td><input type="button" value="Submit Details" id="insertB">
<br>
</td>
</tr>

</table>

<br><br>

<center><div id="resultdiv"></div></center>

</body>
</html>