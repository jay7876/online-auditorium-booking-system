<?php
if(!session_id()){
	session_start();
}


  if(!isset($_SESSION['user_data']) && empty($_SESSION['user_data'])){
	header('Location: login.php');
	exit; 
  } 
   
?>


<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $showAlert=false;
    include 'partials/_dbconnect.php';
    $aid = $_POST["aid"];
    $total_cost = $_POST["total_cost"];
    $seats= $_POST["seats"];
    $date= $_POST["date"];
	$event= $_POST["event"];
	$time= $_POST["time"];
	$phone_number= $_POST["phone_number"];

      $sql="INSERT INTO `booking` ( `aid`, `total_cost`,`seats`,`date`,`event`,`time`,`phone_number`) VALUES ('".$aid."', '".$total_cost."','".$seats."','".$date."','".$event."','".$time."','".$phone_number."')";
      $mysqli->query($sql);
      echo $mysqli -> error;
    
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>BOOKING</title>
	<style>
		.a:hover
		{
			color: red;
		}
		.b
		{
			padding-left: 200px;
			padding-right: 200px;
			border-radius: 40px;
		}
		.a
		{
			padding-left: 97px;
			padding-right: 97px;
			padding-top: 8px;
			padding-bottom: 8px;
		}
		th
		{
			background-color: green;
		}
		.c
		{
			border-radius: 40px;
		}
		.d
		{
			border-collapse: collapse;
			padding-bottom: 10px;
			padding-left: 20px;
			padding-top: 10px;
			padding-right: 20px;
		}
		.m
		{
			background-color: black;
			color: white;
			padding-top: 5px;
			padding-bottom: 5px;
			display: block;
			width: 100%;
			overflow: hidden;
			height: 30px;
		}
		.call
		{
			color: white;
		}
		.k
		{
			padding-bottom: 8px;
			padding-right: 20px;
			padding-top: 8px;
			padding-left: 20px;
			font-weight: bold;
			font-size: 15px;
		}
	</style>
	<script>
		function fun1()
		{
			document.getElementById('aid').value=101;
			document.getElementById('tc').value=1000;
			document.getElementById('s').value=200000;
		}
		function fun2()
		{
			document.getElementById('aid').value=102;
			document.getElementById('tc').value=800;
			document.getElementById('s').value=150000;
		}
		function fun3()
		{
			document.getElementById('aid').value=103;
			document.getElementById('tc').value=300;
			document.getElementById('s').value=100000;
		}
	
	</script>
</head>
<body bgcolor="brown">

		
	<h1 align="center">
		<font color="cyan">WELCOME TO AUDITORIUM BOOKING SYSTEM</font> 
	</h1>
	<hr>
	

<center>
	<form method="post" action="hall.php">
		<table bgcolor="white" class="c">
	<tr>
		<td class="b">
			<p align="center">
				<b>AUDITORIUM BOOKING REQUEST</b>
			</p>
			<br>
			<table border="2" class="d">
				<tr class="d">
					<th class="d">Auditorium ID</th>
					<th class="d">Address</th>
					<th class="d">Seats</th>
					<th class="d">Cost</th>	
					<th class="d">Select</th>	
				</tr>
				<tr class="d">
					<td class="d" align="center">101</td>
					<td class="d">Samast patidar samaj bhavan</td>
					<td class="d">1000</td>
					<td class="d">200000</td>
					<td class="d"><input type="radio" name="nothing" onclick="fun1()"></td>
				</tr>
				<tr class="d">
					<td class="d" align="center">102</td>
					<td class="d">Gandhi shuruti hall</td>
					<td class="d">800</td>
					<td class="d">150000</td>
					<td class="d"><input type="radio" name="nothing" onclick="fun2()"></td>
				</tr>
				<tr class="d">
					<td class="d" align="center">103</td>
					<td class="d">sardar patel hall</td>
					<td class="d">300</td>
					<td class="d">100000</td>
					<td class="d"><input type="radio" name="nothing" onclick="fun3()"></td>
				</tr>
			</table>
		</form>
			<br>
			<form action="hall.php" method="post" onsubmit="return(fun4());">
			<center>
				<label> Auditorium ID: </label>
				<input type="text" id="aid" name="aid">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<br>
				<br>
				<label> Total Cost: </label>
				<input type="text" id="total_cost" name="total_cost">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<br><br>
				<label> Seats: </label>
				<input type="text" id="s" name="seats">
				&nbsp;
				<br><br>
				<label> Date: </label>
				<input type="date" id="date" name="date">
				<br><br>
				<label> Event Name: </label>
				<input type="text" id="event" name="event">
				<br><br>
				<label> Timing: </label>
				
				<input type="select" id="time" name="time">
					<option id="time" >9am to 12pm</option>
					<option id="time" >2pm to 5pm</option>
					<option id="time" >7pm to 10pm</option>
				
				<br><br><br>
				<button class="k">BOOK</button> 
				<button class="k">cancel</button>
				<br><br><br>
		    </center>
		    </form>
		</td>
	</tr>
</table>
</center>
<br><br><br>

</body>
</html>