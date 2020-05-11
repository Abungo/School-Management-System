<?php 
$name="Abungo Thokchom";
$class="10";
$roll="37";
$phone="9205305486";
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&family=Roboto:wght@900&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="printThis.js"></script>
<link rel="stylesheet" type="text/css" href="id.css">
</head>
<body>
    <div class="card">
    	<div class="head" style="border:1px solid black;">
    
    	<img class="logo" src="logo.png" style="height:45px;width:45px;">
   
    	<div class="span" style="width:240px;">
    	<b id="hd"> HEIYAI DHOJO ACADEMY</b>
    	<center id="bosem">(Affiliated to BOSEM,Manipur)</center>
    	</div>
    	</div>
    	<div style="height:1.35in">
    	<div>
    		<img src="student.jpg" style="margin:10px; width:17mm; height:25mm; border:1px solid grey; border-radius:15px;">
    		<div class="details">
    		<b>Student Id: 12345</b></br>
    		<b>Name:<?php echo($name)?></b></br>
    		<b>Class:<?php echo($class)?></b></br>
    		<b>Roll No.:<?php echo($roll)?></b></br>
    		<b>Phone No.:<?php echo($phone)?></b>
    		</div>
    	</div>
    	</div>
    </div>
     
    
    <div>
    </br>
    <button id="bt">Print ID Card</button>
	</div>
<script>
$(document).ready(function(){
  $("#bt").click(function(){
    $("p").printThis({
    importCSS: false,
    loadCSS:"id.css", 
    base: "http://localhost:8080/school/id/"
    });
  });
});
</script>
</body>
</html>