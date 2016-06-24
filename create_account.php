<html>
<head>
<title>Create Account</title>
</head>

<script type="text/javascript">
    <!-- 
       function check(field) {
    if (field.value == '') {
        alert("Field is empty");
    }
}
        -->
</script>


<center><body>
<form name="form1" method="post" action="create.php">
	<table width="397" border="0">
		<tr>
			<td width="103"><br><label><strong>Email address:</strong></label></td>
			<td width="224"><br><input type="email" name="email" id="email"></td>
			
		</tr>
		<tr>
			<td><br><label><strong>Password:</strong></label></td>
			<td><br>
			<input type="password" name="password" id="password" onblur="check(this);"></td>
			
		</tr>
		<tr>
			<td><br><label><strong>Re Type Password:</strong></label></td>
			<td><br><input type="password" name="repassword" id="password"></td>
			
		</tr>
		<tr>
			<td><br><label ><strong>First Name:</strong></label></td>
			<td><br><input type="text" name="fname" id="textfield"></td>
			
		</tr>
		<tr>
			<td><br><label ><strong>Last Name:</strong></label></td>
			<td><br><input type="text" name="lname" id="textfield"></td>
			
		</tr>
		<tr>
			<td><br><label ><strong>Gender:</strong></label></td>
			<td><br><input type="radio" name="gender" id="radio" value="m">
					<label for="radio"><strong>Male</strong></label>
					<input type="radio" name="gender" id="radio2" value="f">
					<label for="radio"><strong>Female</strong></label>
			</td>
			
		</tr>
		<tr>
			<td><br><label ><strong>Address:</strong></label></td>
			<td>
				<table>
						<tr><td align="center"><br><b>Address1:</b></td><td><br><input type="text" name="address1"></td></tr>
						
					    <tr><td align="center"><br><b>Address2:</b></td><td><br><input type="text" name="address2"></td></tr>
						
					    <tr><td align="center"><br><b>Address3:</b></td><td><br><input type="text" name="address3"></td></tr>
						
				</table>
			</td>
		</tr>
		<tr>
			<td></td>
			<td align="center"><br><input type="submit" value="Create Account" onclick="return Blank_TextField_Validator()"></td>
		</tr>
	</table>

</form>
</body></center>
</html>
