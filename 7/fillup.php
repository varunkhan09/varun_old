<html>
<head>
</head>


<body>
<?php
include 'initscript.php';

$parsedpass = md5($_REQUEST["Lpassword"]);

$query = "select * from detailstable1 where UserID='".$_REQUEST["Luserid"]."'";
$result = mysql_query($query);

if(mysql_num_rows($result)!=0)
{
	while($row = mysql_fetch_array($result))
	{
		if($parsedpass == $row["Password"])
		{
			echo "<center>Welcome ".$_REQUEST["Luserid"]."<center>";

?>
			<br><br>
			<table align="center">
			<tr>
			<td>Name </td>
			<td><input type="text" value="<?php echo( htmlspecialchars( $row['Name'] ) ); ?>" /></td>
			</tr>



			<tr>
			<td>Birth Date</td>
			<td><input type="date" id="birthday" value="<?php echo( htmlspecialchars( $row['Birthday'] ) ); ?>"></td>
			<tr>



			<tr>
			<td>Address</td>
			<td><textarea cols="25" rows="5" id="address"><?php echo( htmlspecialchars( $row['Address'] ) ); ?></textarea></td>
			</tr>


			<tr>
			<tr>
			<td>State</td>
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
			?>
				<option value= "<?php $indian_states[$x] ?>" <?php if ($row['State'] == $indian_states[$x]){echo 'selected';} ?> ><?php echo $indian_states[$x]; ?></option>
			<?php
			}
			?>
			</select>
			</td>
			</tr>



			<tr>
			<td>Orientation</td>
			<td>
			<input type="radio" name="orientradio" value="Female" id="Female" <?php if($row['Orientation'] == "Female"){ echo "checked='checked'"; } ?> > Female<br>
			<input type="radio" name="orientradio" value="Male" id="Male" <?php if($row['Orientation'] == "Male"){ echo "checked='checked'"; } ?> > Male<br>
			<input type="radio" name="orientradio" value="Other" id="Other" <?php if($row['Orientation'] == "Other"){ echo "checked='checked'"; } ?> > Other<br>
			</td>
			</tr>
			
			
			<?php
			$HobbiesSelected = explode(",", $row['Interests']);
			$Hcount = count($HobbiesSelected);
			?>
			
			
			<tr>
			<td>Your Interests/Hobbies</td>
			<td>
			<input type="checkbox" name="interestscheck1" id="interestscheck1" value="Music" <?php for($x=0; $x<$Hcount; $x++){ if($HobbiesSelected[$x]=="Music") echo "checked"; } ?> > Music<br>
			<input type="checkbox" name="interestscheck2" id="interestscheck2" value="Coding" <?php for($x=0; $x<$Hcount; $x++){ if($HobbiesSelected[$x]=="Coding") echo "checked"; } ?>> Coding<br>
			<input type="checkbox" name="interestscheck3" id="interestscheck3" value="Yoga" <?php for($x=0; $x<$Hcount; $x++){ if($HobbiesSelected[$x]=="Yoga") echo "checked"; } ?>> Yoga<br>
			<input type="checkbox" name="interestscheck4" id="interestscheck4" value="Cycling" <?php for($x=0; $x<$Hcount; $x++){ if($HobbiesSelected[$x]=="Cycling") echo "checked"; } ?>> Cycling<br>
			</td>
			</tr>

			
			
			
			<?php
			$IDsSelected = explode(",", $row['IDS']);
			$IDcount = count($IDsSelected);
			?>
			
			<tr>
			<td>IDs you have</td>
			<td>
			<div id="iddiv">
			<select size="5" multiple>
			<option class="idlistclass" id="list1" value="Voter ID Card" <?php for($x=0; $x<$IDcount; $x++){ if($IDsSelected[$x]=="Voter ID Card") echo "selected"; } ?>>Voter ID Card</option>
			<option class="idlistclass" id="list2" value="Driving Licence" <?php for($x=0; $x<$IDcount; $x++){ if($IDsSelected[$x]=="Driving Licence") echo "selected"; } ?>>Driving Licence</option>
			<option class="idlistclass" id="list3" value="PAN Card" <?php for($x=0; $x<$IDcount; $x++){ if($IDsSelected[$x]=="PAN Card") echo "selected"; } ?>>PAN Card</option>
			<option class="idlistclass" id="list4" value="Passport" <?php for($x=0; $x<$IDcount; $x++){ if($IDsSelected[$x]=="Passport") echo "selected"; } ?>>Passport</option>
			<option class="idlistclass" id="list5" value="Adhaar Card" <?php for($x=0; $x<$IDcount; $x++){ if($IDsSelected[$x]=="Adhaar Card") echo "selected"; } ?>>Adhaar Card</option>
			</select>
			</div>
			</td>
			</tr>
			
			
			
			
			
			
				
			<tr>
			<td>Your department in Flaberry</td>
			<td>
			<input type="radio" name="departmentradio" value="HR Department" id="HRD" <?php if($row['Department'] == "HR Department"){ echo "checked='checked'"; } ?> >HR Department<br>
			<input type="radio" name="departmentradio" value="Customer Support Team" id="ST" <?php if($row['Department'] == "Customer Support Team"){ echo "checked='checked'"; } ?> >Customer Support Team<br>
			<input type="radio" name="departmentradio" value="Technical Support" id="TS" <?php if($row['Department'] == "Technical Support"){ echo "checked='checked'"; } ?> >Technical Support<br>
			<input type="radio" name="departmentradio" value="Other" id="O" <?php if($row['Department'] == "Other"){ echo "checked='checked'"; } ?>>Other<br>
			</td>
			</tr>
			
			
			<tr>
			<td>Salary<br>(Per Month) </td>
			<td>8,000<input type="range" id="salary" min="8000" max="100000" value="<?php echo 	$row['Salary']; ?>">1,00,000<br><br><br>
			<label for="salary" id="salaryvalue" value="8,000"></label>
			</td>
			</tr>

			
			
			
			<tr>
			<td>User Name</td>
			<td><input type="text" id="username" value="<?php echo $row['UserID'] ?>"></td>
			</tr>
			
								
			
			
			</table>
			<?php
		}

		else
		{
			echo "Wrong Password!";
		}
	}
}

else
{
echo "Invalid User ID";
}


?>
</body>
</html>