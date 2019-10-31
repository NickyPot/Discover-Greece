<html>
<head>
	 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

		<form action="../Controller/login.php" method="post" onsubmit = "return loginValidation()">
			<li>User Name<input type="text" name="username" id="username" /></li>
			<li>Employee Name<input type="password" name="password" id="password" /></li>
			<li id="isChecked"></li>
			<div class="g-recaptcha" id="reCaptcha" data-sitekey="6LcOKMAUAAAAAOPE6jQqGjjRQOzbH3jMrxA9CGAT"></div>
			<li><input type="submit"></li>
		</form>



<script src="../Controller/scripts.js"></script>
</body>
</html>
