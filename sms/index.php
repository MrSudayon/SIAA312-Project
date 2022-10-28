
<?php
	require $_SERVER['DOCUMENT_ROOT'].'../bossb/sms/vendor/autoload.php';
	
	$messagebird = new \MessageBird\Client('####');
	$message = new \MessageBird\Objects\Message();
	$message->originator ='BossB';
	$message->recipients =array(+639455000760);
	$message->body ='bossbburger', <br>,'please prepare COD 0.00 for delivery of your total order';
	
	$messagebird->messages->create($message);
?>
