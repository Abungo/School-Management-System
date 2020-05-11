<?php 
	session_start();
	if($_SESSION["username"]){
	echo "Username: ".$_SESSION["username"];
	echo "</br>";
	echo "Password ".$_SESSION["password"]."</br>";
}
else{
header("Location:login.php");
}?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="bs/bootstrap.min.css">
<script src="/ bs/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<a href="logout.php" class="btn btn-primary">Logout</a>
<script>
$(document).ready(function(){
  $(".hell").click(function(){
    $(this).hide();
  });
});
</script>
</body>
</html> 