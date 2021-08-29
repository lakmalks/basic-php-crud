<?php 
include("dbHelper.php");
print_r($_GET);
$emp_id=$_GET['emp_id'];

$sql="SELECT * FROM emp WHERE emp_id='$emp_id'";
$result=$conn->query($sql);

if($result->num_rows>0){
$data=$result->fetch_assoc();
$emp_name=$data["emp_name"];
$emp_nic=$data["emp_nic"];
$emp_dpt=$data["emp_dpt"];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete an Employer</title>
</head>
<body>


	<table align="center" border="1">
		<form action="emp_ed_pro.php" method=GET>
		<tr>
			<td>Employer ID : </td>
			<td >
				<input type="text" name="emp_id" value=<?php echo $emp_id ?> readonly></td>
		</td></tr>

		<tr>
			<td><label>Employer Name :</label></td>

			<td><input type="text" name="emp_name" value=<?php echo $emp_name ?>></td>
		</tr>
		<tr>
			<td><label>Employer NIC :</label></td>
			<td><input type="text" name="emp_nic" value=<?php echo $emp_nic ?> ></td>
		</tr>
		<tr>

			<td><label>Employer Department :</label></td>
			<td><input type="text" name="emp_dpt" value=<?php echo $emp_dpt ?> ></td>
		</tr>
		<tr>
			<td colspan="2" align=center ><input type="submit" name="btn" value='Edit Employer'></td>
		</tr>
		<tr>
			<td colspan="2" align=center ><input type="submit" name="btn" value='Delete Employer'></td>
		</tr>
	</form>

	</table>
	
</body>
</html>