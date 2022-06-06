<?php
	include "../dbase/dbaseconnection.php";
?>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<link rel="stylesheet" href="../css/signin.css">
		<link rel="icon" type="image/png" href="../icons/logo.png">
		<title>Boss B - SignIn</title>
	</head>
	<body>
	<form action="../index.php" method="POST" enctype='multipart/form-data'>
		<h1 class="mainheader">BOSS B BURGER, FRIES & SANDWICHES</h1>
		<section>
		<div class="contleft">		
			<h1 class="tagline">Home of 8" Giant Burger.<br>All-in Food Restaurant.</h1>
			<a href="visitor_dashb.php"><img src="../icons/logo.png" class="logo"></a>
		</div>
		<div class="cont">

			<label class="signinlbl">LOGIN</label>

			<img src="../icons/usericon.png" style="width:50px;margin:auto" class="uicon"><input type="text" name="usern" class="usertxt" placeholder="Username" autocomplete=off required /> 
			<img src="../icons/key.png" style="width:40px;height:40px" class="ukey"><input type="password" name="pass" class="passtxt" placeholder="Password" required />
			<input type="submit" name="login" class="logbut" value="OK" />
			<br><a href="../user/createaccount.php" class="lblforgot">Create an account?</a>
			
		</div>
		</section>
	</form>
	</body>
</html>