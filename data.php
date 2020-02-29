<!DOCTYPE html>
<html>
<head>
	<title>Lands</title>
</head>
<body>
<table>
	<tr>
		<th>Survey Number</th>
		<th>District</th>
	</tr>
	<?php
	$conn = new  mysqli("localhost","root","abc1","phplogin");
	
	if ($conn -> connect_error) {
		die("Connection Failed :" . $conn -> mysqli_connect_error());
	}
	$sql= "select * from dataset";
	$result= $conn -> query($sql);
	if($result -> num_rows > 0){
		while ($row = $result -> fetch_assoc()) {
			echo "<tr><td>".$row["surveyno"]."<td><td>".$row["district"]"</td></tr>";
        }
	echo "</table>";
	else{
		echo "0 result";
	}
			# code...
	mysqli_close($conn);
    }

 ?>

</table>
</body>
</html>