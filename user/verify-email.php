<?php
include ("../dbase/dbaseconnection.php");

	if(isset($_POST['submit'])) {
		$vcode = $_POST['v-code'];
        $email = $_POST['email'];
        $username = $_POST['user'];

		$sql = mysqli_query($conn, "SELECT * FROM user WHERE EMAILADD = '$email'") or die(mysqli_error($conn));
        while($row=mysqli_fetch_array($sql)) {
        $vkey = $row['verify_token'];
        }
            if($vcode == $vkey) {
        
                $upd = mysqli_query($conn,"UPDATE user SET U_STATUS = 'ACTIVE' WHERE EMAILADD = '$email' and EMP_UNAME = '$username'");
                ?>
                    <script>
                        alert ("Verified Successfully, You can now login");
                       
                    </script>
                <?php
                 header("refresh:0; url = ../user/signin.php");
            
            } else {
                ?>
                    <script>
                        alert ("Please try again!");
                    </script>
                <?php
                header("refresh:0; url = ../user/createaccount.php");
            }
        
	}
?>