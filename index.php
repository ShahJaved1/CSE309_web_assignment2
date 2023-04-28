 <!DOCTYPE html>
 <html lang="en">
 <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Contact Form</title>
 </head>
 <body>
	<h1>Contact Us</h1>
	<form method="post" action="submit.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required><br>

		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required><br>

		<label for="message">Message:</label><br>
		<textarea name="message" id="message" required></textarea><br>

		<input type="submit" value="Submit">
	</form>

	
	<h1 class="login">Admin Logins</h1>
	<form action="login.php" method="post">
		  <label for="username">Username:</label>
		  <input type="text" id="username" name="username" required>
		  <br>
		  <label for="password">Password:</label>
		  <input type="password" id="password" name="password" required>
		  <br>
		  <input type="submit" value="Login">
	</form>
	  
</body>
 </html>

