
<?php

$surveyno = $_POST['surveyno'];
$district = $_POST['district'];
$blockpanchayath = $_POST['blockpanchayath'];
$panchayath = $_POST['panchayath'];
$location =$_POST['location'];
$pno = $_POST['pno'];
$annualprecp = $_POST['annualprecp'];
$organicc = $_POST['organicc'];
$phosphorous = $_POST['phosphorous'];
$potassium = $_POST['potassium'];
$ph = $_POST['ph'];
$output =$_POST['output'];


$conn = new  mysqli('localhost','root','abc1','phplogin');
if ($conn -> connect_error){
	die('Connection Failed :'. $conn -> connect_error);
}
else{
	$stmt = $conn -> prepare("Insert into dataset(surveyno, district, blockpanchayath, panchayath, location, pno, annualprecp, organicc, phosphorous, potassium, ph, output)
		values(?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt -> bind_param( "sssssidddddi", $surveyno, $district, $blockpanchayath, $panchayath, $location, $pno, $annualprecp, $organicc, $phosphorous, $potassium, $ph, $output);
	$stmt -> execute();
	echo "Registration successful";
	$stmt -> close();
	$conn -> close();
}

?>