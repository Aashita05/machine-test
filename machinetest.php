<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<form method="POST">
		<input type="text" name="ido" placeholder="What I have to do?"><br>
		<input type="text" name="where" placeholder="Where?"><br>
		<input type="text" name="when" placeholder="When?"><br>
		<select name="options">
			<option value="sun">Sunday</option>
			<option value="mon">Monday</option>
			<option value="tue">Tueday</option>
			<option value="wed">Wednesday</option>
			<option value="thu">Thursday</option>
			<option value="fri">Friday</option>
			<option value="sat">Saturday</option>
		</select><br>
		<button name="icon">
		Add Task
	</button>
	</form>

	<?php
		if (isset($_POST['icon'])) {
			$Whattodo = $_POST['ido'];
			$whereis = $_POST['where'];
			$date = $_POST['when'];
			$choosingDay = $_POST['options'];

			echo "The entry here shown below: <br>";
			echo "What Task Done : ".$Whattodo ."<br>";
			echo "Where Task Done :".$whereis."<br>";
			echo "Date and Time :".$date."<br>";
			switch ($choosingDay) {
				case 'sun':
					echo "Today is holiday.No Work";
					break;
				case 'mon':
					echo "Today is Monday,I uploaded my today's work";
					break;
				case 'tue':
					echo "Today is Tuesday,I uploaded my today's work";
					break;
				case 'wed':
					echo "Today is Wednesday,I uploaded my today's work";
					break;
				case 'thu':
					echo "Today is Thrusday,I uploaded my today's work";
					break;
				case 'fri':
					echo "Today is Friday,I uploaded my today's work";
					break;
				case 'sat':
					echo "Today is Saturday,I uploaded my today's work";
					break;
				
				default:
					echo "wrong data";
					break;
			}
		}
	?>
	 
</body>
</html>