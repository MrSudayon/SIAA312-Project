<?php
include ('../dbase/dbaseconnection.php');// Using database connection file here
		
		$ordercode = $_GET['ordercode'];		 // get id through query string
		if(isset($_GET['ordercode'])){
			$ordercode = $_GET['ordercode'];
		}			
		$UPDT ="UPDATE cart SET status='Approved' where ordercode='$ordercode'";// delete query
		$conn->query($UPDT);
		?>
			<script>
				alert("Order has been approved");
			</script>
		<?php
		
	header("refresh:50;URL=../admin/admin_dash.php"); // redirects to all records page
	
	require $_SERVER['DOCUMENT_ROOT'].'../bossb/sms/vendor/autoload.php';
	
	$selectcid="select C_ID from cart where ordercode='$ordercode'";
	$resultid = $conn->query($selectcid);
	if($row1= $resultid->fetch_assoc())
	{
		  $cid = $row1['C_ID'];
	}
		
	$customerno="select EMP_CONTACTNUM from user where EMP_ID='$cid'";
	$resultcon = $conn->query($customerno);
	if($row2 = $resultcon->fetch_assoc())
	{
		  $contact = $row2['EMP_CONTACTNUM'];
	}
	
	$selectctot="select total from cart where ordercode='$ordercode'";
	$resulttot = $conn->query($selectctot);
	if($row3 = $resulttot->fetch_assoc())
	{
		  $ctotalorder = $row3['total'];
	}
	
	
	$messagebird = new \MessageBird\Client('zDKqwLK3vsINavrtbAJHKMVTM');
	$message = new \MessageBird\Objects\Message();
	$message->originator ='BossB';
	$message->recipients =array("+63".$contact);
	$message->body ='BOSSB: your order is currently preparing. orderno: '.$ordercode.' please prepare COD total: '.$ctotalorder.' upon delivery of your order';
	
	$messagebird->messages->create($message);
	
	mysqli_close($conn); // Close connection
			
?>