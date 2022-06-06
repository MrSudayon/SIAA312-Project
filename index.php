<?php
include 'user/auth.php';
require 'dbase/dbaseconnection.php';

		
	if(isset($_POST['login'])){	

		$usern = $_POST['usern'];
		$password = $_POST['pass'];
		
		$qry =  mysqli_query($conn, "SELECT * FROM user WHERE EMP_UNAME='$usern' AND EMP_PASS='$password'");
		$result = mysqli_fetch_array($qry);
		
		$id = $result['EMP_ID'];
		$account = $result['EMP_FNAME'];
		$position = $result['POSITION'];
		$uname = $result['EMP_UNAME'];
		$status = $result['U_STATUS'];

		$counter = mysqli_num_rows($qry);
		
		if($counter > 0) {
			$_SESSION['SESS_MEMBER_ID'] = $id;
			$_SESSION['SESS_FNAME'] = $account;
			date_default_timezone_set('Asia/Manila');
			$date = date('Y-m-d');
			$time = date('H:i:s');
		
				if($counter== true && $position=="EMPLOYEE" && $status=="ACTIVE") {
					?>
						<script>
							alert("welcome ",$uname);
						</script>
					
					<?php
					mysqli_query($conn,"INSERT INTO audit_log(name,position,action,timedate) VALUES('$account','$position','LOGIN IN SYSTEM AT',NOW())")
					or die(mysqli_error($conn));
					header("refresh:0; url = admin/dboard.php");
				}
				elseif($counter== true && $position=="admin" && $status=="ACTIVE"){
					?>
						<script>
							alert("welcome",$uname);
						</script>
				
					<?php
					mysqli_query($conn,"INSERT INTO audit_log(name,position,action,timedate) VALUES('$account','$position','LOGIN IN SYSTEM AT',NOW())")
					or die(mysqli_error($conn));
					header("refresh:0; url = adminpage/admin.php");
					
				}
				elseif($counter== true && $position=="RIDER" && $status=="ACTIVE"){
					?>
						<script>
							alert("welcome",$uname);
						</script>
				
					<?php
					mysqli_query($conn,"INSERT INTO audit_log(name,position,action,timedate) VALUES('$account','$position','LOGIN IN SYSTEM AT',NOW())")
					or die(mysqli_error($conn));
					header("refresh:0; url = rider/rider.php");
					
				}
				else if($counter == true && $position == "customer" && $status=="ACTIVE"){
					?>
						<script>
							alert("welcome",$uname);
						</script>
					
					<?php
					mysqli_query($conn,"INSERT INTO audit_log(name,position,action,timedate) VALUES('$account','$position','LOGIN IN SYSTEM AT',NOW())")
					or die(mysqli_error($conn));
					header("refresh:0; url = user/c_dashboard.php");
				} 
				else {
					?>
						<script>
							alert('Account is not Activated.');
							window.location = "user/signin.php";
						</script>
					<?php 
				}

		} else {
			?>
				<script>
					alert('Invalid username or password!');
					window.location = "user/signin.php";
				</script>
			<?php 
		}
		

	} else {
			?>
				<script>
					alert('Hello!');
					window.location = "user/visitor_dashb.php";
				</script>
			<?php 
	}
	
?>