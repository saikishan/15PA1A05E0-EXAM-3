<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="add.css">
        <script src="/pages/scripts/jqurey.js"></script>
        <script src="/pages/scripts/auth.js"></script>
        <script src="/pages/scripts/login.js"></script>
	</head>
	<body>
			<h1>Login/Register</h1>
			<ul class="nav">
				<li><a href="../index.php">Home</a></li>
                <li><a href="login.php">Login/Register</a></li>
			</ul>
		<div class="main-content">
			User Name : <input id="username" type="text" placeholder="username">
            Password : <input id="password" type="password" placeholder="password">
            <input id="btn-login" type="button" value="login"><br>
            Phone Number : <input id="phoneno" type="text" placeholder="number">
            Address : <input id="address" type="text" placeholder="address">
            <input id="btn-register" type="button" value="register">
		</div>
	</body>
</html>
