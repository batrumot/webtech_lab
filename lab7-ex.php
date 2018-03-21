<html>
	<head><title>check contact</title></head>
	<body>
		<?php
			$email = $_POST['email'];
			$URL = $_POST['URL'];
			$phone = $_POST['phone'];
			//chi check dc dang **@**.  
			//neu hhh@gmai. van coi la valid ??
			//if(preg_match('/@.+\./', $email))
			if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
				print("valid email: $email <br>");
			}
			else{
				print("invalid email: $email <br>");
			}
			if(filter_var($URL, FILTER_VALIDATE_URL)) {
				print("valid URL: $URL <br>");
			}
			else {
				print("invalid URL: $URL <br>");
			}
			if(preg_match("/^[0-9]$/", $phone)) {
				print("valid phone number: $phone");
			}
			else {
				print("invalid phone number: $phone");
			}
		?>
	</body>
</html>