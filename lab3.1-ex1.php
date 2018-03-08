<html>
	<head><title>Date time processing</title></head>
	<body>
		<p>Enter your name and select date and time for the appointment</p>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST">
			<?php
				if(array_key_exists("name", $_POST)){
					$name = $_POST["name"];
				}
				else {
					$name = "";
				}
				if(isset($_POST["submit"])) {
					$name = $_POST["name"];
					print("Hi <b> $name </b> <br>");
					$year = $_POST["year"];
					$month = $_POST["month"];
					$date = $_POST["date"];
					$hour = $_POST["hour"];
					$minute = $_POST["minute"];
					$second = $_POST["second"];	
				}	
			?>
			<table>
				<tr>
					<td>Your name: </td>
					<td colspan="4"><input type="text" size="20" name="name" value="<?php print("$name") ?>"> </td>
				</tr>
				<tr>
					<td>Date: </td>
					<td><select name = "date">
						<?php
							for($i = 1; $i <= 31 ; $i++) {
								if($date == $i) {
									print("<option selected> $i </option>");
								}
								print("<option> $i </option>"); 
							}
						?>
					</select></td>
					<td><select name = "month"> 
						<?php
							for($i=1; $i <= 12; $i++) {
								if($month == $i) {
									print("<option selected> $i </option>");
								}
								else {
									print("<option> $i </option>");
								}
							}
						?>
					</select></td>
					<td><select name = "year"> 
						<?php
							for($i=1900; $i <= 2020; $i++) {
								if($year == $i) {
									print("<option selected> $i </option>");
								}
								else {
									print("<option> $i </option>");
								}
							}
						?>
					</select></td>
				</tr>
				<tr>
					<td>Time</td>
					<td><select name = "hour"> 
						<?php
							for($i = 0; $i <= 23; $i ++) {
								if($hour == $i) {
									print("<option selected> $i </option>");
								}
								else {
									print("<option> $i </option>");
								}
							}
						?>
					</select></td>
					<td><select name = "minute"> 
						<?php
							for($i = 0; $i <= 59; $i ++)  {
								if($minute == $i) {
									print("<option selected> $i </option>");
								}
								else {
									print("<option> $i </option>");
								}
							}
						?>
					</select></td>
					<td><select name="second"> 
						<?php
							for($i = 0; $i <= 59; $i ++) {
								if($second == $i) {
									print("<option selected> $i </option>");
								}
								else {
									print("<option> $i </option>");
								}
							}
						?>
					</select></td>
				</tr>
				<tr>
					<td><input type="submit" value="Submit" name="submit"></td>
					<td><input type="reset" value="Reset"></td>
				</tr>
			</table>
			<table>
				<tr>
					<td>
						<?php
							if(isset($_POST["submit"])) {
								$name = $_POST["name"];
								print("Hi <b> $name </b> <br>");
								$year = $_POST["year"];
								$month = $_POST["month"];
								$date = $_POST["date"];
								$hour = $_POST["hour"];
								$minute = $_POST["minute"];
								$second = $_POST["second"];
								print("you have chosen to have an appointment on $hour:$minute:$second, $date/$month/$year <br>" );
								if($hour > 12) {
									$temp = $hour - 12;
									print("in 12 hours, the time and date is $temp:$minute:$second PM, $date/$month/$year <br>");
								}
								else{ 
									print("in 12 hours, the time and date is $hour:$minute:$second AM, $date/$month/$year <br>");
								}
								$nhuan = 0;
								if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
										print("this month has 31 days");
								}
								if($month == 4 || $month == 6 || $month == 9 || $month == 11) {
										print("this month has 30 days");
								}
							 	if($year % 4 == 0 && $year % 100 != 0) $nhuan = 1;
								if($year % 400 == 0) $nhuan = 1;
								if($nhuan == 1 && $month == 2) print("this month has 29 days");
								if($nhuan == 0 && $month == 2) print("this month has 28 days");
							}
						?>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>