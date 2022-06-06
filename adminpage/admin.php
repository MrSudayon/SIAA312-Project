<?php
	include "../dbase/dbaseconnection.php";
	require_once ('../user/auth.php'); 
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
		<img src="../icons/logo.png" class="logopng1">
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
    <div class="container">
		<center><h1 class="mainheader">BOSS B BURGER, FRIES & SANDWICHES</h1></center>
			<h2 class="header1">Order Status</h2>
        <div class="content">
            <div class="cards">

                <div class="card">
                    <div class="box">
						<?php
							$result = mysqli_query($conn, 'SELECT SUM(TOTAL) AS value_sum FROM sales'); 
							$row = mysqli_fetch_assoc($result); 
							$sum = $row['value_sum'];

						?>
						
						<h3> Income <br><?php echo "₱ ".$sum; ?>
						</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                       
						<?php
							$sel="SELECT * from user"; 
							$result = $conn->query($sel);
							$row = mysqli_num_rows($result);
						?>
						
                        <h3>Accounts <br><?php echo $row; ?></h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    
						<?php
							$sel="SELECT AVAILABILITY from products"; 
							$result = $conn->query($sel);
							$row = mysqli_num_rows($result);
						?>
						
                        <h3>Archives <br><?php echo $row; ?></h3>
                    </div>

                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                    </div>
						<?php
							$sel = "SELECT * FROM user AS u 
									INNER JOIN sales AS c 
									ON (u.EMP_ID = c.C_ID) 
									order by TRANSDATE DESC";
							$result = $conn->query($sel);

							if ($result->num_rows > 0) 
								{		// output data of each row
									echo "<table border=1 cellpadding=5 class=tablein>";
										echo "<thead>";
											echo "<tbody>";
												echo "<tr bgcolor=#363636 style='color:white'>";
													echo "<th>Order ID";
													echo "<th>Customer ID";
													echo "<th>Address";
													echo "<th>Amount";
												echo "</tr>";
									
												while($row = $result->fetch_assoc()) 
												{
												echo "<tr bgcolor=white>";
													echo "<th>" . $row["ORDER_ID"];
													echo "<th>" . $row["EMP_ID"];
													echo "<th>" . $row["FULLADD"];
													echo "<th>" . $row["TOTAL"];
												
												}
							
												echo "</tr>";
											echo "</form>";
											echo "</tbody>";
										echo "</thead>";
									echo "</table>";
							
								}else{
									
									echo "<CENTER><p  style='color:red' font-size='2em'>0 results: ID not  found </p></CENTER>";
												
								}
							
						?>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Customers</h2>
                        <a href="../adminpage/useraccounts.php" class="btn">View All</a>
                    </div>
                    <?php
						$sel1 = "SELECT * FROM user where POSITION='customer'";
						$result1 = $conn->query($sel1);

							if ($result1->num_rows > 0) 
								{		// output data of each row
									echo "<table border=1 cellpadding=5 class=tablein>";
										echo "<thead>";
											echo "<tbody>";
												echo "<tr bgcolor=#363636 style='color:white'>";
													echo "<th>Full Name";
													echo "<th>Full Address";
												echo "</tr>";
									
												while($row1 = $result1->fetch_assoc()) 
												{
												echo "<tr bgcolor=white style='height:50px;'>";
													echo "<th>" . strtoupper($row1["EMP_LNAME"])," ", strtoupper($row1["EMP_FNAME"])," ", strtoupper($row1["EMP_MI"]);
													echo "<th>" . $row1["FULLADD"];
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
            </div>
        </div>
    </div>
</body>

</html>
