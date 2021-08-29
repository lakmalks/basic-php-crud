<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>add employee</title>
</head>
<body>
	
<?php
echo "<a href='/ayeakka/home.php'>Back to home</a>";

include("dbHelper.php");
$sql="SELECT MAX(emp_id) as emp_id FROM emp";
$result=$conn->query($sql);

if($result->num_rows>0){
	$data=$result->fetch_assoc();
	$emp_id=$data['emp_id'];
	
}

?>
<form action="emp_add_pro.php" method=GET>
	<table align="center" border="1">
		<tr>
			<td>Employer ID : </td>
			<td >
				<input type="text" name="emp_id" value=<?php echo $emp_id +1 ?> readonly></td>
		</td></tr>

		<tr>
			<td><label>Employer Name :</label></td>

			<td><input type="text" name="emp_name" ></td>
		</tr>
		<tr>
			<td><label>Employer NIC :</label></td>
			<td><input type="text" name="emp_nic"></td>
		</tr>
		<tr>

			<td><label>Employer Department :</label></td>
			<td><input type="text" name="emp_dpt"></td>
		</tr>
		<tr>

			<td><input type="reset" name="btn_reset" value='Reset' ></td>
			<td><input type="submit" name="btn_submit" value='Save'></td>
		</tr>

	</td></tr>
	</table>
	</form>
</body>
</html>