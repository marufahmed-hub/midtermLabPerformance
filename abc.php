<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Person Profile</title>
</head>
<body>

<center>
 <?php if(isset($_SESSION['pass'])){ echo $_SESSION['pass'];} ?>

	<form method="POST" action="check.php">
	<form>
	<table border=1>
	   <tr>
	   <td colspan="3"><h1><center>Person Profile</center></h1></td>
	   <td></td>
	   </tr>
		
		<tr>
			<td>Name</td>
			<td><input type="text" name="" value=""/></td>
			
		</tr>
		<tr>
			<td>Email</td>
			<td> <input type="text" name="" value=""/></td>
			<td></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
				</td>
				<td></td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td><input type="date" name="" value=""/></td>
			<td></td>
		</tr>
		<tr>
			<td>Blood Group </td>
			<td>
              <select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>			
			</td>
			<td></td>
		</tr>
		
		<tr>
			<td>Degee</td>
			<td>
				<input type="checkbox" name="">SSC
				<input type="checkbox" name="">HSC
				<input type="checkbox" name="">BSc.
				<input type="checkbox" name="">MSc.
			</td>
			<td></td>
		</tr>
		
		<tr>
			<td> Photo </td>
			<td>
				<input type="button" name="" value="Browse..">
				<textarea> No files selected..</textarea>
			</td>
		</tr>

    <tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="submit">
	</td>
		
		
	</table>
	</form>
	</center>
</body>
</html>