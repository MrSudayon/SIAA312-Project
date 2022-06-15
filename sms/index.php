<!--
	require $_SERVER['DOCUMENT_ROOT'].'../bossb/sms/vendor/autoload.php';
	
	$messagebird = new \MessageBird\Client('zDKqwLK3vsINavrtbAJHKMVTM');
	$message = new \MessageBird\Objects\Message();
	$message->originator ='BossB';
	$message->recipients =array(+639058297643);
	$message->body ='bossbburger', <br>,'please prepare COD 0.00 for delivery of your total order';
	
	$messagebird->messages->create($message);	
-->

<?php
	require $_SERVER['DOCUMENT_ROOT'].'../bossb/sms/vendor/autoload.php';
	
	$messagebird = new \MessageBird\Client('GYCvyJnSLlJIcF6qEcDKl5hCx');
	$message = new \MessageBird\Objects\Message();
	$message->originator ='BossB';
	$message->recipients =array(+639455000760);
	$message->body ='bossbburger', <br>,'please prepare COD 0.00 for delivery of your total order';
	
	$messagebird->messages->create($message);
?>