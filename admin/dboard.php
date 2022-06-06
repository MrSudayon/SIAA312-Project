<?php
	include "../dbase/dbaseconnection.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../adminpage/styles.css">
    <title>Ordering</title>
</head>

<body>
    <div class="side-menu">
		<img src="../icons/logo.png" class="logopng1">
        <center><h1>Employee</h1></center>
        	<ul>
				<a href="../admin/dboard.php"><li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li></a>
				<a href="../admin/admin_dash.php"><li><img src="payment.png" alt="">&nbsp; <span>Orders</span> </li></a>
				<a href="../admin/order.php"><li><img src="settings.png" alt="">&nbsp;<span>Preparing</span> </li></a>
				<a href="../user/logout.php"><li><img src="help-web-button.png" alt="">&nbsp; <span>Logout</span></li></a>
			</ul>
    </div>
    <div class="container">
		<center><h1 class="mainheader">BOSS B BURGER, FRIES & SANDWICHES</h1>
			<h2 class="header1">Dashboard</h2></center>
        <div class="content">
            <div class="cards">

                <div class="card">
                    <div class="box">
						<?php
							$sql1 = "SELECT * FROM cart where status='Waiting for Approval'";
							$result1 = $conn->query($sql1);
							if ($result1->num_rows > 0){
								$rowcount1=mysqli_num_rows($result1);
							}else{
								$rowcount1=0;
							}
						?>
						<h3> incoming orders <br><?php echo $rowcount1; ?></h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
						<?php
							$sql3 = "SELECT * FROM cart where status='Approved'";
							$result3 = $conn->query($sql3);
							if ($result3->num_rows > 0){
								$rowcount3=mysqli_num_rows($result3);
							}else{
								$rowcount3=0;
							}
						?>
						<h3> ready to ship <br><?php echo $rowcount3; ?></h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
						<?php
							$sql4 = "SELECT * FROM cart where status='On Delivery'";
							$result4 = $conn->query($sql4);
							if ($result4->num_rows > 0){
								$rowcount4=mysqli_num_rows($result4);
							}else{
								$rowcount4=0;
							}
						?>
						<h3> On Delivery <br><?php echo $rowcount4; ?></h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
						<?php
							$date=date('Y-m-d');
							$sql5 = "SELECT * FROM sales where TRANSDATE='$date' && STATUS='Completed' ";
							$result5 = $conn->query($sql5);
							if ($result5->num_rows > 0){
								$rowcount5=mysqli_num_rows($result5);
							}else{
								$rowcount5=0;
							}
						?>
						<h3> Delivered <br><?php echo $rowcount5; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
