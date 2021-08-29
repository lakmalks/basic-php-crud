<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>add department</title>
</head>
<body>
	
<?php
include("dbHelper.php");
echo "<a href='/ayeakka/home.php'>Back to home</a>";


?>
<form action="users_add_pro.php" method=GET>
	<table align="center" border="1">
		<tr>
			<td>Employer ID : </td>
			<td >
				<input type="text" name="emp_id"></td>
		</td></tr>

		<tr>
			<td><label>User Name :</label></td>

			<td><input type="text" name="user_name" ></td>
		</tr>
		<tr>
			<td><label>Password :</label></td>
			<td><input type="text" name="password"></td>
		</tr>

			<td><input type="reset" name="btn_reset" value='Reset' ></td>
			<td><input type="submit" name="btn_submit" value='Save'></td>
		</tr>

	</td></tr>
	</table>
	</form>
</body>
</html>