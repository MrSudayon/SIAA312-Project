<?php
//before we store information of our member, we need to start first the session
session_start();
//create a new function to check if the session variable member_id is on set

	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) =='')) {
	?>
		<script>
			exit();
		</script>	
	<?php
		header("refresh:0;url=signin.php");
	}	

?>
<!--
	session_start();

	if(empty($_SESSION['SESS_MEMBER_ID'])):
		<script>
			header("location: signin.php");
			exit();
		</script>	
		exit();
	endif;
-->

