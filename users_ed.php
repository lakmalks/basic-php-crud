<?php 
include("dbHelper.php");
print_r($_GET);
$emp_id=$_GET['emp_id'];

$sql="SELECT emp_id,username FROM login WHERE emp_id='$emp_id'";
$result=$conn->query($sql);

if($result->num_rows>0){
$data=$result->fetch_assoc();
$user_name=$data["username"];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete or Update System users</title>
</head>
<body>


	<table align="center" border="1">
		<form action="users_ed_pro.php" method=GET>
		<tr>
			<td>Employer ID : </td>
			<td >
				<input type="text" name="emp_id" value=<?php echo $emp_id ?> readonly></td>
		</td></tr>

		<tr>
			<td><label>User Name :</label></td>

			<td><input type="text" name="user_name" value=<?php echo $user_name ?>></td>
		</tr>
		
		
		<tr>
			<td colspan="2" align=center ><input type="submit" name="btn" value='Update'></td>
		</tr>
		<tr>
			<td colspan="2" align=center ><input type="submit" name="btn" value='Delete'></td>
		</tr>
	</form>

	</table>
	
</body>
</html>