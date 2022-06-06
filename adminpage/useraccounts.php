<?php
	include"../dbase/dbaseconnection.php";
/*	require_once ('../user/auth.php'); 
	
    $id_no=$_SESSION['SESS_MEMBER_ID'];
    
    $query2=mysqli_query($conn,"select * from cart where C_ID='$id_no' and status='Pending'")or die(mysqli_error($conn));
    $count=mysqli_num_rows($query2);
    if( $id_no==null){
		
	require_once ('../user/auth.php'); 
	
	header("refresh:0;URL=../user/signin.php"); // redirects to all records page
	}
*/
?>
<html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/sales.css">
	</head>
	<body>
	<form action="../adminpage/useraccounts.php" method="POST" enctype='multipart/form-data'>
		
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
			<h2 class="header">Accounts</h2>
			<div class="prodcon">
			<center><h2>Add New</h2></center>
				<table border=1 cellpadding=5 class=tablein1>
					<thead>
						<tbody>
							<tr bgcolor=#363636 style='background-image: linear-gradient(#ffae42, #ff4500); color:white;'>
								<th>First Name</th>
								<th>M.I</th>
								<th>Last Name</th>
								<th>Contact no.</th>
								<th>Email</th>
							<tr style='background-color:white'>
								<th><input name="fn"autocomplete="off"></th>
								<th><input name="ln"autocomplete="off"></th>
								<th><input name="mi"autocomplete="off"></th>
								<th><input name="contact"autocomplete="off"></th>
								<th><input name="email"autocomplete="off"></th>
							<tr bgcolor=#363636 style='background-image: linear-gradient(#ffae42, #ff4500); color:white;'>
								<th>Address</th>
								<th>Position</th>
								<th>Username</th>
								<th>Password</th>
								<th></th>
							<tr style='background-color:white'>
								<th><input name="add" autocomplete="off">
								<th><select name="posi" autocomplete="off">
										<option value="">-----</option>
										<option value="RIDER">RIDER</option>
										<option value="EMPLOYEE">EMPLOYEE</option>
										<option value="ADMIN">ADMIN</option>
									</select>
								</th>
								<th><input name="usern" autocomplete="off">
								<th><input type=password name="pass" autocomplete="off">
								<th><input name="addbut" type=submit class="addbut" value="Add">
								</th>
							</tr>
						</tbody>
					</thead>
				</table>
			
				
				<br><br>
			</div>
			<div class="scon">
				<input name="search" class="searchtxt" autocomplete="off" autofocus placeholder="Search id"><input name="sbut" type=submit class="searchbut" value="Search">
			</div>
					<?php
						$fn="";
							$ln="";
							$mi="";
							$cont="";
							$em="";
							$addr="";
							$posi="";
							$un="";
							$pw="";
							$pw="";
						if(isset($_POST['addbut'])){
							$fn=$_POST['fn'];
							$ln=$_POST['ln'];
							$mi=$_POST['mi'];
							$cont=$_POST['contact'];
							$em=$_POST['email'];
							$addr=$_POST['add'];
							$posi=$_POST['posi'];
							$un=$_POST['usern'];
							$pw=$_POST['pass'];
							
								$add = "INSERT INTO user (EMP_ID,EMP_FNAME,EMP_LNAME,EMP_MI,EMP_CONTACTNUM,EMAILADD,FULLADD,POSITION,EMP_UNAME,EMP_PASS,U_STATUS)
								VALUES(null,'$fn','$ln','$mi','$cont','$em','$addr','$posi','$un','$pw','ACTIVE')";
									
								$conn->query($add);
									?>
										<script>
											alert("SUCCESSFULLY ADDED");
										</script>
									<?php
									header("location: ../adminpage/useraccounts.php");
						}else{
							
							$fn="";
							$ln="";
							$mi="";
							$cont="";
							$em="";
							$addr="";
							$posi="";
							$un="";
							$pw="";
							$pw="";
						}
						
						if(isset($_POST['sbut'])){
							
							$search=$_POST['search'];
							$sel = "SELECT * FROM user where EMP_ID= '$search'";
						}
						else{
							$sel = "SELECT * FROM user";
						}
							$result = $conn->query($sel);

							if ($result->num_rows > 0) 
								{		// output data of each row
									echo "<table border=1 cellpadding=5 class=tablein>";
										echo "<thead>";
											echo "<tbody>";
												echo "<tr bgcolor=#363636 style='color:white'>";
													echo "<th>User ID";
													echo "<th>User Name";
													echo "<th>Full Name";
													echo "<th>Contact";
													echo "<th>Email";
													echo "<th>Position";
													echo "<th>Status";
													echo "<th colspan=2>Action";
												echo "</tr>";
									
												while($row = $result->fetch_assoc()) 
												{
												echo "<tr bgcolor=white style='height:50px;'>";
													echo "<th>" . $row["EMP_ID"];
													echo "<th>" . $row["EMP_UNAME"];
													echo "<th>" . strtoupper($row["EMP_LNAME"])," ", strtoupper($row["EMP_FNAME"])," ", strtoupper($row["EMP_MI"]);
													echo "<th>" . $row["EMP_CONTACTNUM"];
													echo "<th>" . $row["EMAILADD"];
													echo "<th>" .  strtoupper($row["POSITION"]);
													if( $row["U_STATUS"] =='ACTIVE'){
														echo "<th bgcolor=lime>" . $row["U_STATUS"];
													}else{
														echo "<th bgcolor=red>" . $row["U_STATUS"];
													}
													?>
													<th> <a href="../adminpage/activate.php?id=<?php echo $row['EMP_ID'];?>"style='background-color:#3c99dc; padding:10px; border-radius:5px;'>ACTIVATE</a></th>
													<th> <a href="../adminpage/deactivate.php?id=<?php echo $row['EMP_ID'];?>" style='background-color:red; padding:10px; border-radius:5px;'>DEACTIVATE</a></th>
													<?php
												}
							
												echo "</tr>";
											echo "</form>";
											echo "</tbody>";
										echo "</thead>";
									echo "</table>";
							
								}else{
									
									echo "<CENTER><p  style='color:red' font-size='2em'>0 results: ID not  found </p></CENTER>";
												
								}
								
						$conn->close();
								
					
					?>
		</div>
	</form>
	</body>
</html>