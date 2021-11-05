<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="stylesheet" href="risen.css">
<link rel="stylesheet" href="portal_login.css">
<link rel="stylesheet" href="stylesheet.css">
<link rel="apple-touch-icon" href="favicon.png"> <!-- 60x60 -->
<link rel="apple-touch-icon" sizes="76x76" href="favicon.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon.png">
</head>
<body>

		<div class="login">
      <div class="w3-center">
      <img src="images/risen_two.png" style="width:50%"><br />
      <h1 style="border:0px">To</h1>
      <img src="images/cor.png" style="width:50%">
    </div>
			<h1>Portal Login</h1>
			<form action= "includes/login.inc.php" method="post" name="Please Sign In">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="uid" placeholder="Username" id="username" pattern="[a-zA-Z0-9]+" required />
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="pwd" placeholder="Password" id="password" required />
        <span class="error"><?php echo $fieldErr;?></span>
				<input type="submit" name="submit" value="login" class="risensubmit">
			</form>
		</div>
	</body>
</html>