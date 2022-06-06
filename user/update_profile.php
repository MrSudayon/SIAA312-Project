<?php
include ('../dbase/dbaseconnection.php');
    
$id = $_GET['id'];
    
    if(count($_POST)>0) {

        mysqli_query($conn,"UPDATE user set EMP_FNAME='" . $_POST['lname'] . "', EMP_LNAME='" . $_POST['fname'] . "', EMP_MI='" . $_POST['mi'] . "' ,EMAILADD='" . $_POST['emailadd'] . "' ,FULLADD='" . $_POST['fulladd'] . "' WHERE EMP_ID='$id'");
        $message = "Record Modified Successfully";
    }
        $result = mysqli_query($conn,"SELECT * FROM user WHERE EMP_ID='$id'");
        $row= mysqli_fetch_array($result);
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="../icons/logo.png">
	<title>Update Profile - Boss B Burgers</title>
</head>
<body>
    <form name="frmUser" method="post" action="">
    <div>
        <?php 
            if(isset($message)) { 
                echo $message; } 
            ?>
        </div>

    <!--Username: <br>
    <input type="hidden" name="userid" class="txtField" value= echo $row['EMP_ID']; ?>">
    <input type="text" name="userid"  value="echo $row['userid']; ">
    <br>-->
    First Name: <br>
    <input type="text" name="fname" class="txtField" value="<?php echo $row['EMP_FNAME']; ?>">
    <br>
    M.I: <br>
    <input type="text" name="mi" class="txtField" value="<?php echo $row['EMP_MI']; ?>">
    Last Name :<br>
    <input type="text" name="lname" class="txtField" value="<?php echo $row['EMP_LNAME']; ?>">
    <br>
    City:<br>
    <input type="text" name="emailadd" class="txtField" value="<?php echo $row['EMAILADD']; ?>">
    <br>
    Email:<br>
    <input type="text" name="fulladd" class="txtField" value="<?php echo $row['FULLADD']; ?>">
    <br>
    <input type="submit" name="submit" value="Submit" class="button">

</form>
</body>
</html>