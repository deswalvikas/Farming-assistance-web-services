<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
	<title>Farming Tips</title>
	<link rel="stylesheet" type="text/css" href="FarmingTipsDetails.css">
	
</head>

<body>
	<form action="" method="">
		<h1 align="center">Farming Tips by Admin</h1> 
	<table >
		
		<tr>

		
		<th>farmer_id</th>
		<!-- <th>tip_id</th> -->
		<th>Tip</th>
		</tr>

<?php
include("connection.php");
error_reporting(0);
$query = "select * from farmingtips";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if($total!=0)
{
	
	while($result=mysqli_fetch_assoc($data))
	{
		echo  "
		<tr>
		
		<td>".$result['farmer_id']."</td>
	
		<td>".$result['tips_name']."</td>

		</tr>
				";
	}

}
else
{
	echo "No such records found";
}




?>

<input type="button" value="Go back!" onclick="history.back()">

	</table>
	
</body>
</html>