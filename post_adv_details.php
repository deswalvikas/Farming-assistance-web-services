<html>
<head>
	<title>Complain Status</title>
	<link rel="stylesheet" type="text/css" href="FarmerComplaintStatus.css">
	
</head>

<body>
	<table >
		<tr>

		
		<th>post_id</th>
		<th>supplier_id</th>
		<th>crop_name</th>
		
		<th>required_quantity</th>
		<th>supplier_name</th>
		<th>contact_number</th>

		</tr>






<?php
include("connection.php");
error_reporting(0);
$query = "select * from post_adv";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if($total!=0)
{
	
	while($result=mysqli_fetch_assoc($data))
	{
		echo  "
		<tr>
		
		<td>".$result['post_id']."</td>
		<td>".$result['supplier_id']."</td>
		<td>".$result['crop_name']."</td>
		<td>".$result['required_quantity']."</td>
		<td>".$result['supplier_name']."</td>
		<td>".$result['contact_number']."</td></tr>
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