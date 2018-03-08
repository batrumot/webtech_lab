<html>
	<head><title>result</title></head>
	<body>
		<p style="font-size: 25"> <em>Thank you for your help</em></p>
		<p>here are your information</p>
		<?php
			$name = $_POST["name"];
			$class = $_POST["class"];
			$university = $_POST["university"];
			print("<br> your name: $name");
			print("<br> your class: $class");
			print("<br> your university: $university <br>");
			if(isset($_POST["hobbies"])) {
				$hobbies = $_POST["hobbies"];
				echo "your hobbies are:  <br>";
				foreach ($hobbies as $key => $value) {
					print("$value <br>");
				}
			}
			else {
				print("you did not choose any hobbies");
			}
		?>
	</body>
</html>