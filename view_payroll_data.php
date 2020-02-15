<?php

 include_once("db_connect.php");

   $result = mysqli_query($con, "SELECT * FROM payroll ")

?>

<!DOCTYPE html>
<html>
<head>
	<title>View payroll data</title>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color: orange;
}
td{
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
	<table>
		<?php 
		while ($res= mysqli_fetch_array($result)){ ?>
			<tr>
				<th>No. of Payroll</th>
				<th>Employees Salary cost</th>
				<th>Purchased Equipment Cost</th>
				<th>Transport Cost</th>
				<th>Other Cost</th>
				<th>Operation</th>
			</tr>
			<tr>
			<td> <?php echo $res['id']; ?></td>
			<td> <?php echo $res['e_cost']; ?></td>
			<td> <?php echo $res['p_cost']; ?></td>
			<td> <?php echo $res['t_cost']; ?></td>
			<td> <?php echo $res['o_cost']; ?></td>

            <?php echo "<td><a href=\"update.php?id=$res[id]\">Update</a> | <a href=\"delete.php?id=$res[id]\">Delete</a> </td>"?>
		</tr>

		<?php }

		?>
		
	</table>

</body>
</html>