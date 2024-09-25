<html>
<head>
	<title>Complain Status</title>
	<link rel="stylesheet" type="text/css" href="FarmerComplaintStatus.css">
	
</head>

<body>
	<table >
		<tr>

		
		<th>complain_id</th>
		<th>farmer_id</th>
		<th>complain</th>
		</tr>

<?php
include("connection.php");
error_reporting(0);
$query = "select * from farmer_complain_page";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if($total!=0)
{
	
	while($result=mysqli_fetch_assoc($data))
	{
		echo  "
		<tr>
		
		<td>".$result['complain_id']."</td>
		<td>".$result['farmer_id']."</td>
		<td>".$result['complaint']."</td></tr>
				";
	}

}
else
{
	echo "No such records found";
}

?>

	</table>
<input type="button" value="Go back!" onclick="history.back()">
</body>
</html>
