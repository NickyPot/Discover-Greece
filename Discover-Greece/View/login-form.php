<html>
<head>
	 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

		<form action="../Controller/login.php" method="post">
			<li>User Name<input type="text" name="username" /></li>
			<li>Employee Name<input type="password" name="password" /></li>
			<div class="g-recaptcha" data-sitekey="6LcOKMAUAAAAAOPE6jQqGjjRQOzbH3jMrxA9CGAT"></div>
			<li><input type="submit"></li>
		</form>

</body>
</html>
