
<?php
	if(isset($_POST['cancel'])){
		$aid = $_POST['aid'];
		$sql = "DELETE FROM booking WHERE aid=$aid";
		if (mysqli_query($mysqli, $sql)) {
			echo "Record deleted successfully";
		} else {
			echo "Error deleting record: " . mysqli_error($mysqli);
      }
	}
	?>
<html>
    <head>
        <style>
          
            </style>
            
        </head>
    <body>

<form action="cancel.php" method= onsubmit="return(fun4());">
    <h1> <center>cancel booking </center></h1>
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
				
				<select id="time" name="time" >
					<option id="time" >9am to 12pm</option>
					<option id="time" >2pm to 5pm</option>
					<option id="time" >7pm to 10pm</option>
                    </select>
				<br><br><br>
			          
				<button class="k">   CANCEL  </button>
				<br><br><br>
		    </center>
		    </form>
		</body>
            </html>
