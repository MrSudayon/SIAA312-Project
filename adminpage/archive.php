<?php
	include"../dbase/dbaseconnection.php";
	require_once ('../user/auth.php'); 
	
    $id_no=$_SESSION['SESS_MEMBER_ID'];
    
    $query2=mysqli_query($conn,"select * from cart where C_ID='$id_no' and status='Pending'")or die(mysqli_error($conn));
    $count=mysqli_num_rows($query2);
    if( $id_no==null){
		
	require_once ('../user/auth.php'); 
	
	header("refresh:0;URL=../user/signin.php"); // redirects to all records page
	}
?>
<html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/sales.css">
	</head>
	<body>
	<form action="../adminpage/archive.php" method="POST" enctype='multipart/form-data'>
		
		<div class="side-menu">
			<img src="../icons/logo.png" class="logopng">
            <center><h1>ADMIN</h1></center>
			<ul>
				<a href="../adminpage/admin.php"><li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li></a>
				<a href="../adminpage/itemlist.php"><li><img src="dashboard (2).png" alt="">&nbsp; <span>Products</span> </li></a>
				<a href="../adminpage/useraccounts.php"><li><img src="reading-book (1).png" alt="">&nbsp;<span>Accounts</span> </li></a>
				<a href="../adminpage/archive.php"><li><img src="payment.png" alt="">&nbsp;<span>Archives</span> </li></a>
				<a href="../adminpage/sales.php"><li><img src="payment.png" alt="">&nbsp;<span>Sales</span> </li></a>
				<li><img src="help-web-button.png" alt="">&nbsp; <span>Logout</span></li>
			</ul>
		</div>
		<div class="container2">
			<center><h1 class="mainheader">BOSS B BURGER, FRIES & SANDWICHES</h1></center>
			<h2 class="header">Archives</h2>
			
			<div class="scon">
				<input name="search" class="searchtxt" autocomplete="off" autofocus placeholder="Search product name"><input name="sbut" type=submit class="searchbut" value="Search">
			</div>
					<?php
						if(isset($_POST['sbut'])){
							
							$search=$_POST['search'];
							$sel = "SELECT * FROM products where AVAILABILITY = 'Archive' && PROD_NAME LIKE '%".$search."%' ";
						}
						else{
							$sel = "SELECT * FROM products where AVAILABILITY = 'Archive'";
						}
							$result = $conn->query($sel);

							if ($result->num_rows > 0) 
								{		// output data of each row
									echo "<table border=1 cellpadding=5 class=tablein>";
										echo "<thead>";
											echo "<tbody>";
												echo "<tr bgcolor=#363636 style='color:white'>";
													echo "<th>Product ID";
													echo "<th>Image";
													echo "<th>Product Name";
													echo "<th>Availability";
													echo "<th>Price";
													echo "<th>Category";
													echo "<th colspan=2>Action";
												echo "</tr>";
									
												while($row = $result->fetch_assoc()) 
												{
												echo "<tr bgcolor=white>";
													echo "<th>" . $row["PROD_ID"];
													?>
														<th> 
															<img src="<?php echo"../imgs/".$row["IMAGE"]?>" width='50px' height='50px'>
														</th>
													<?php
													echo "<th>" . $row["PROD_NAME"];
													if( $row["AVAILABILITY"] =='Unavailable'){
														echo "<th style='background-color:#ff3333;'>" . $row["AVAILABILITY"]; 
													}else{
														
														echo "<th bgcolor=white>" . $row["AVAILABILITY"]; 
													}
													echo "<th contenteditable='true'>" . $row["PRICE"];
													echo "<th>" . $row["CATEGORY"];
													
													?>
													<th> <a href="../adminpage/republish.php?id=<?php echo $row['PROD_ID'];?>"style='background-color:lime; padding:10px; border-radius:5px;'>Publish</a></th>
													
													<?php
												}
							
												echo "</tr>";
											echo "</form>";
											echo "</tbody>";
										echo "</thead>";
									echo "</table>";
							
								}else{
									
									echo "<CENTER><p  style='color:red' font-size='2em'>0 results: Product not  found </p></CENTER>";
												
								}
						$conn->close();
								
					?>
		</div>
	</form>
	</body>
</html>