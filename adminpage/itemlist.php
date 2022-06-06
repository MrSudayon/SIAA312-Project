<?php
	include"../dbase/dbaseconnection.php";
	require_once ('../user/auth.php'); 
	$ids = '';
	$pn = '';
	$pa = '';
	$pr ='';
	$pc ='';
    
    $id_no=$_SESSION['SESS_MEMBER_ID'];
    
    $query2=mysqli_query($conn,"select * from cart where C_ID='$id_no' and status='Pending'")or die(mysqli_error($conn));
    $count=mysqli_num_rows($query2);
    if( $id_no==null){
		
	require_once ('../user/auth.php'); 
	
	header("refresh:0;URL=../user/signin.php"); // redirects to all records page
	}
    ?>  
<!DOCTYPE html>

<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/itemlist.css">
	<title> Boss B Burgers/product_list</title>
	<link rel="icon" type="image/png" href="../icons/logo.png">
	</head>
	<body>
	<form action="../adminpage/itemlist.php" method="POST" enctype='multipart/form-data'>
		
		<div class="side-menu">
			<img src="../icons/logo.png" class="logopng">
            <center><h1>ADMIN</h1></center>
			<ul>
				<a href="../adminpage/admin.php"><li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li></a>
				<a href="../adminpage/itemlist.php"><li><img src="dashboard (2).png" alt="">&nbsp; <span>Products</span> </li></a>
				<a href="../adminpage/useraccounts.php"><li><img src="reading-book (1).png" alt="">&nbsp;<span>Accounts</span> </li></a>
				<a href="../adminpage/archive.php"><li><img src="payment.png" alt="">&nbsp;<span>Archives</span> </li></a>
				<a href="../adminpage/sales.php"><li><img src="payment.png" alt="">&nbsp;<span>Sales</span> </li></a>
				<a href="../user/logout.php"><li><img src="help-web-button.png" alt="">&nbsp; <span>Logout</span></li></a>
			</ul>
		</div>
		<div class="container2">
			<center><h1 class="mainheader">BOSS B BURGER, FRIES & SANDWICHES</h1></center>
			<h2 class="header"> Product List</h2>
			
			<div class="prodcon">
			<center><h2>Add New</h2></center>
				<table border=1 cellpadding=5 class=tablein1>
					<thead>
						<tbody>
							<tr bgcolor=#363636 style='background-image: linear-gradient(#ffae42, #ff4500); color:white;'>
								<th>Image</th>
								<th>Product Name</th>
								<th>Category</th>
								<th>Price</th>
								<th>Availability</th>
							</tr>
							<tr style='background-color:white'>
								<th><input type='file' name='file' required ></th>
								<th><input name="prodname"autocomplete="off" requiredplaceholder="Product name"></th>
								<th><select name="cat" autocomplete="off" required placeholder="Category">
										<option value="NA">-------</option>
										<option value="Partytray">Party Tray</option>
										<option value="Burgers">Burgers</option>
										<option value="Meals">Meals</option>
									</select>
								</th>
								<th><input name="pr"  autocomplete="off" required placeholder="Price"></th>
								<th><select name="avail" autocomplete="off" required >
										<option value="Available">Available</option>
										<option value="Unavailable">Unavailable</option>
									
									</select>
								</th>
							</tr>
						</tbody>
					</thead>
				</table>
			
				<center><input name="addbut" type=submit class="addbut" value="Add"></center>
				<br><br>
			</div>
	</form>
	<form action="../admin/itemlist.php" method="POST" enctype='multipart/form-data'>
	
			<div class="scon">
				<center><h2>Product Details</h2></center>
				<center><input name="search" class="searchtxt" autocomplete="off" placeholder="Search Product Name"><input name="sbut" type=submit class="searchbut" value="Search"></center>
				<input name="rem" type=submit class="rem" value="Remove Filter">
	
			</div>
	</form>
					<?php
						$pn="";
						$pa="";
						$pp="";
						$pr="";
						$pc="";
						$pid="";
						if(isset($_POST['addbut'])){
							$prodname=$_POST['prodname'];
							$prodcat=$_POST['cat'];
							$prodprice=$_POST['pr'];
							$prodava=$_POST['avail'];
							
							$name = $_FILES['file']['name'];
							$target_dir = "../imgs/";
							$target_file = $target_dir . basename($_FILES["file"]["name"]);

							// Select file type
							$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

							// Valid file extensions
							$extensions_arr = array("jpg","jpeg","png","gif");

							// Check extension
							if( in_array($imageFileType,$extensions_arr) ){
								// Upload file
								if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
									// Convert to base64 
									$image_base64 = base64_encode(file_get_contents('../imgs/'.$name) );
									$image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
									// Insert record
								}
							}
								$add = "INSERT INTO products (PROD_ID,IMAGE,PROD_NAME,AVAILABILITY,PRICE,CATEGORY)VALUES(null,'$name','$prodname','$prodava','$prodprice','$prodcat')";
									
								$conn->query($add);
									?>
										<script>
											alert("SUCCESSFULLY ADDED");
										</script>
									<?php
									header("location: ../adminpage/itemlist.php");
						}
						
						if(isset($_POST['rem'])){
							header("refresh:0;URL=../adminpage/itemlist.php");
						}
						if(isset($_POST['sbut'])){
							
							$stxt=$_POST['search'];
							$sel = "SELECT * FROM products WHERE AVAILABILITY='Available' || AVAILABILITY='Unavailable' AND PROD_NAME LIKE '%$stxt%'";
							$result = $conn->query($sel);
						}else{
						$sel = "SELECT * FROM products where AVAILABILITY='Available' || AVAILABILITY='Unavailable'  ORDER BY AVAILABILITY";
						$result = $conn->query($sel);
						}

							if ($result->num_rows > 0) 
								{
									// output data of each row
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
													echo "<th contenteditable='true'>". number_format($row["PRICE"],2);
													echo "<th>" . $row["CATEGORY"];
													?>
	
	</form>
	<form action="../adminpage/itemlist.php" method="POST" enctype='multipart/form-data'>												
													<th><a href="../adminpage/update.php?id=<?php echo $row['PROD_ID'];?>" style='background-color:#3c99dc; padding:10px; border-radius:5px;'>Update</a></th>
													<th><a href="../adminpage/delete.php?id=<?php echo $row['PROD_ID'];?>" style='background-color:red; padding:10px; border-radius:5px;'>Delete</a></th>
													<?php
										
												}
							
												echo "</tr>";
											echo "</form>";
											echo "</tbody>";
										echo "</thead>";
									echo "</table>";
							
								}else {
									echo "<CENTER><p  style='color:red' font-size='2em'>0 results: ID not  found </p></CENTER>";			
								}
							
						$conn->close();
								
					?>
		</div>
	</form>
	</body>
</html>