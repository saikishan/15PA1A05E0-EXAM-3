<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="add.css">
        <script src="/pages/scripts/jqurey.js"></script>
        <script src="/pages/scripts/auth.js"></script>
        <script src="/pages/scripts/adddata.js"></script>
	</head>
	<body>
			<h1>Upload</h1>
			<ul class="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">Login/Register</a></li>
			</ul>
		<div class="main-content">
			Price :<input id="price" type="text" placeholder="price">
            Name : <input id="name" type="text" placeholder="name">
            <input id="myFile" type="file" />
            <img id="img" src="" />
            <input id="senddata" type="button" value="senddata">
		</div>
	</body>
</html>
