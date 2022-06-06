<?php
/* Database config */
	$servername="localhost";
	$username="root";
	$password="";
	$dbase="bossbburgers";

/* End config */

$db = new PDO('mysql:host='.$servername.';dbname='.$dbase, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>