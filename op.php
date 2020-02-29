<?php
$connection = mysql_connect("localhost", "root", "abc1");
$db = mysql_select_db("phplogin", $connection);
$query = mysql_query("select * from dataset", $connection);
<span>Name:</span> <?php echo $row1['surveyno']; ?>
mysql_close($connection);
?>