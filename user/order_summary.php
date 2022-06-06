<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="../icons/logo.png">
		<title>Update Order - Boss B Burgers</title>
	<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
		background-color: #ddd;
	}

	* {
		box-sizing: border-box;

	}

	/* Add padding to containers */
	.container {
		margin-top: 5%;
		padding: 40px;
		background-color: white;
		box-shadow: 0px 5px 12px 0px rgba(0,0,0,1);
		width: 50%;
	}

	.qty {
		padding: 5px;
	}

	/* Full-width input fields */
	input[type=text] {
		width: 100%;
		padding: 18px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
	}

	input[type=text]:focus {
		cursor: pointer;
		background-color: #ddd;
		outline: none;
	}

	input[type=number] {
		padding: 5px;
	}
	/* Overwrite default styles of hr */
	hr {
		border: 1px solid #f1f1f1;
		margin-bottom: 50px;
	}

	.registerbtn {
		background-color: #FF6240;
		color: white;
		padding: 16px 20px;
		margin: 0px auto;
		border: none;
		cursor: pointer;
		width: 100%;
		opacity: 0.9;
	}

	.registerbtn:hover {
	opacity: 1;
	}

	.backbtn {
		background-color: #ddd;
		color: black;
		padding: 16px 20px;
		margin: 0px auto;
		border: none;
		cursor: pointer;
		width: 100%;
		opacity: 0.9;
	}

	backbtn:hover {
		opacity: 1;
	}

	/* Add a blue text color to links */
	a {
		color: dodgerblue;
	}

	</style>
</head>
	<body>

	
	<center>
		<div class="container">
			<h1>Update Quantity</h1>
			<hr>

	<?php
	include ("../dbase/dbaseconnection.php");

	?>
		<form action="update_final.php" method="POST">
			<div class="qty">
				<label for="email"><b>Quantity</b></label>
				
			</center>
		
		</form>
	</div>
</body>
</html>