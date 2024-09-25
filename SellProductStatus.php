<html>
<head>
	<title>sell product status</title>
	<link rel="stylesheet" type="text/css" href="FarmerComplaintStatus.css">
	
</head>

<body>
	<table >
		<tr>

		
		<th>sell_id</th>
		<th>farmer_id</th>
		<th>supplier_id</th>
		<th>supplier_name</th>
		<th>crop_name</th>
		<th>quantity</th>
		<th>rupees</th>
		</tr>
<input type="button" value="Go back!" onclick="history.back()">
<?php
include("connection.php");
error_reporting(0);
$query = "select * from sell_crop";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if($total!=0)
{
	
	while($result=mysqli_fetch_assoc($data))
	{
		echo  "
		<tr>
		
		<td>".$result['sell_id']."</td>
		<td>".$result['farmer_id']."</td>
		<td>".$result['supplier_id']."</td>
		<td>".$result['supplier_name']."</td>
		<td>".$result['crop_name']."</td>
		

		<td>".$result['quantity_id']."</td>
		<td>".$result['rupees_id']."</td>
	</tr>
				";
	}

}
else
{
	echo "No such records found";
}




?>



	</table>
</body>
</html>

