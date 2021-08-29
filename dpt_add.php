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


$sql="SELECT MAX(dpt_id) as dpt_id FROM department";
$result=$conn->query($sql);

if($result->num_rows>0){
	$data=$result->fetch_assoc();
	$dpt_id=$data['dpt_id'];
}


?>
<form action="dpt_add_pro.php" method=GET>
	<table align="center" border="1">
		<tr>
			<td>Department ID : </td>
			<td >
				<input type="text" name="dpt_id" value=<?php echo $dpt_id +1 ?> readonly></td>
		</td></tr>

		<tr>
			<td><label>Department Name :</label></td>

			<td><input type="text" name="dpt_name" ></td>
		</tr>
		<tr>
			<td><label>Department Location :</label></td>
			<td><input type="text" name="dpt_location"></td>
		</tr>

			<td><input type="reset" name="btn_reset" value='Reset' ></td>
			<td><input type="submit" name="btn_submit" value='Save'></td>
		</tr>

	</td></tr>
	</table>
	</form>
</body>
</html>