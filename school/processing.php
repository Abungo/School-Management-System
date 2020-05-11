<?php
session_start();
require_once("db.php");
$key=strtolower($_GET["data"]);
mysqli_select_db($con,"school");
$sql = "SELECT * FROM users WHERE role='$key'";
$result = mysqli_query($con, $sql);
	echo("<option>Choose</option>");
while($row = mysqli_fetch_assoc($result)){
	echo("<option>".$row["fname"]."</option>");
}
mysqli_free_result($result);

mysqli_close($con);
?>