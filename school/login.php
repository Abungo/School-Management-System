<?php
session_start();
require_once("db.php");
if(isset($_POST["username"])){
$uname=$_POST["username"];
$pass=$_POST["password"];
$_SESSION["username"]=$uname;
$_SESSION["password"]=$pass;
echo $_SESSION["username"];
echo "</br>";
echo $_SESSION["password"];
header("Location:index.php");
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="bs/bootstrap.min.css">
<script src="/ bs/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body >
<section class="bg container-fluid">
<section>
	<section class="row justify-content-center">
	<section class="col-sm-6 col-md-10">
		<form class="form-container" method="POST">
		<div class="form-group">
		<label for="sel1">Select Role</label>
		<select class="form-control" id="sel1">
		<option>Choose User Type</option>
		<option value="admin">Admin</option>
		<option value="teacher">Teacher</option>
		<option value="student">Student</option>
		<option value="parent">Parent</option>
		</select>
		</div>
		<div class="form-group">
		<label for="sel2">Select User</label>
		<select class="form-control" id="sel2">
		<option>Choose User</option>
		</select>
		</div>
		<div class="form-group">
		 	<label for="username">Username</label>
		 	<input name="username" type="name" class="form-control" id="username" aria-describedBy="emailHelp" placeholder="Enter Username ">
		 	<small id="usernameHelp" class="form-text text-muted">I'm muted</small>
		</div>
		<div class="form-group">
		<label for="password">Password</label>
		<input name="password" type="password" class="form-control" id="password" aria-describedBy="pwHelp" placeholder="Enter Password  ">
		<small id="pwHelp" class="form-text text-muted">Hello there</small>
		</div>
		<div class="text-center">
		<button type="submit" class="btn btn-primary col-8 mb-5">Log In</button></br>
		<label for="register" class="status-primary">Don't have an account yet?</label></br>
		<a id="register" href="register.php" class="btn btn-primary col-5">Register</a>
		</div>
		</form>
	</section>
	</section>
</section>
</section>
<script>
$(document).ready(function(){
  $("#sel1").change(function(){
    var data1=$('#sel1 option:selected').val();
    $.get("processing.php",{data:data1},function(data,status){
    $("#sel2").empty();
    $("#sel2").append(data);
    });
  });
  $("#sel2").change(function(){
  	var uname1=$('#sel2 option:selected').val();
  	$("#username").val(uname1);
  });
});
</script>
</body>
</html>