<html>
<head>
	<title>Bootstrap 4 Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="/~1704807/View/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>


	  <div>

	    <!-- source: https://wallpapermemory.com/uploads/705/santorini-wallpaper-1080p-496872.jpg-->
	    <img class="img-responsive center-block fit-image" src="/~1704807/imgs/headerImage2.jpg" alt="header image">
	  </div>

	  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">

	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Active</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Link</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Link</a>
	      </li>





	    </ul>

	  </nav>

<div class="card">


		<form name ="loginForm" action="../Controller/create-user.php" method="post" onsubmit = "return loginValidation()">
			<input type="text" name="username" placeholder="Email" id="username"><br>
			<input type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!£$%^&*?#@]).{8,}"><br>
			<input type="password"  id="passwordConfirm" placeholder="Confirm Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!£$%^&*?#@]).{8,}"><br>
			<input type="tel" name="phoneNum" id="phoneNum" placeholder="Phone Number">
			<div class="g-recaptcha" id="reCaptcha" data-sitekey="6LcOKMAUAAAAAOPE6jQqGjjRQOzbH3jMrxA9CGAT"></div>
			<input type="submit">
			<div id="passwordVer">
				<li id="small" class="invalid">Please include lower case letters in your password!</li>
				<li id="capital" class="invalid">Please include a capital letter in your password!</li>
				<li id="number" class="invalid">Please include a number in your password!</li>
				<li id="specialChar" class="invalid">Please include a special character (!, £, $, %, ^, &, *, ?, #, @) in your password!</li>
				<li id="length" class="invalid">Your password needs to be at least 8 characters long!</li>
			</div>


		</form>

</div>

<script src="../Controller/scripts.js"></script>
</body>
</html>
