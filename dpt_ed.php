<?php 
include("dbHelper.php");
print_r($_GET);
$dpt_id=$_GET['dpt_id'];

$sql="SELECT * FROM department WHERE dpt_id='$dpt_id'";
$result=$conn->query($sql);

if($result->num_rows>0){
$data=$result->fetch_assoc();
$dpt_name=$data["dpt_name"];
$dpt_location=$data["location"];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete or Update a Department</title>
</head>
<body>


	<table align="center" border="1">
		<form action="dpt_ed_pro.php" method=GET>
		<tr>
			<td>Depatment ID : </td>
			<td >
				<input type="text" name="dpt_id" value=<?php echo $dpt_id ?> readonly></td>
		</td></tr>

		<tr>
			<td><label>Department Name :</label></td>

			<td><input type="text" name="dpt_name" value=<?php echo $dpt_name ?>></td>
		</tr>
		<tr>
			<td><label>Department Location :</label></td>
			<td><input type="text" name="dpt_location" value=<?php echo $dpt_location ?> ></td>
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