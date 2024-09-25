<?php
include("connection.php");
error_reporting(0);
$query = "select * from farmingtips";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if ($total != 0) {

	while ($result = mysqli_fetch_assoc($data)) {
		echo  "
		<tr>
		
		<td>" . $result['farmer_id'] . "</td>
		<td>" . $result['tip_id'] . "</td>
		<td>" . $result['Tip'] . "</td>

		</tr>
				";
	}
} else {
	echo "No such records found";
}
