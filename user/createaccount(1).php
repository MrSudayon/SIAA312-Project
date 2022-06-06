<?php
include ("../dbase/dbaseconnection.php");

//use PHPMailer\PHPMailer\PHPMailer;

	//require '../vendor/autoload.php';

	//if(isset($_POST['create'])){

		//$contact=$_POST['contact'];
		//$email = $_POST['email'];
		//$username=$_POST['usern'];
		//$pass=$_POST['pass'];
		
		//$vkey = md5(time() . $username);

			//send email    
			//$mail = new PHPMailer();
			//$subject = "Email Verification";
			//$message = "<a href='http://localhost/bossb/user/verify.php?verify_token=$vkey'> Register Account </a>";
			//$headers = "From: sudayonfernando001@gmail.com \r \n";
			//$headers .= "MIME-Version: 1.0" . "\r\n";
			//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			//mail($email,$subject,$message,"From: sudayonfernando001@gmail.com");

			//$mail->send();

			//echo "success" . $message;

	//}

?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<link rel="stylesheet" href="../css/createaccount.css">
		<link rel="icon" type="image/png" href="../icons/logo.png">
		<title>Create Acc - Boss B Burgers</title>
	</head>
	<body>
	<form action="createaccount.php" method="POST">
		<h1 class="mainheader">BOSS B BURGER, FRIES & SANDWICHES</h1>
		<br><br><br>
		<center>
		<section id="maincontholder">
			<div class="contleft">		
				<h1 class="tagline">Home of 8" Giant Burger.<br>All-in Food Restaurant.</h1>
				<a href="signin.php"><img src="../icons/logo.png" class="logo"></a>
			</div>
			<div class="cont">
				<div class="o_content">
					<label class="createlbl">Create Account</label>
					
				<table>
					<tr>
						<td>Full Name:</td>
						<td>
							<input type='text' name='fname' class="txtfname" placeholder="First Name" required />
							<input type='text' name='mi' class="txtmi" placeholder="MI"/>
							<input type='text' name='lname' class="txtlname" placeholder="Last Name" required />
						</td>
					</tr>

					<tr>
						<td>Email Add:</td>
						<td colspan="3">
							<input type='email' style="width: 100%;" name='email' class="txtem" placeholder="sample@gmail.com" autocomplete="off" required/>
						</td>
					</tr>

					<tr>
						<td>Address:</td>
						<td colspan="3">
							<input type='text' style="width: 100%;" name='address' class="txtadd" placeholder="Complete Address" required />
						</td>
					</tr>

					<tr>
						<td>Username:</td>
						<td colspan="3">
							<input type='text' style="width: 100%;" name='usern' class="txtun" placeholder="username" autocomplete="off" required />
						</td>
					</tr>

					<tr>
						<td>Password:</td>
						<td colspan="3">
							<input type='password' style="width: 100%;" name='pass' class="txtpw" placeholder="password" required />
						</td>
					</tr>
					
					<tr>
						<td>Confirm:</td>
						<td colspan="3">
							<input type='password' style="width: 100%;" name='cpass' class="txtcpass" placeholder="Confirm Password" required />
						</td>
					</tr>
					
					<tr>
						<td>Contact no:</td>
						<td colspan="3">
							<input type='text' style="width: 100%;" name='contact' class="txtcon" placeholder="+63-" autocomplete="off" required />
						</td>
					</tr>
					
				</table>

					<br><input type='checkbox' class='required' required><a href="termsncondi.php" class="terms">Terms and Condition</a></input>
					<br><input type='submit' name='create' class="btncreate" value="Register" />
				</div>
			</div>
		</section>
		</center>
	</form>
	</body>
</html>
						<!--
						<label class="lblfname">Full Name:</label>
							input type='text' name='fname' class="txtfname" placeholder="First Name" required />
							<input type='text' name='mi' class="txtmi" placeholder="MI" />
							<input type='text' name='lname' class="txtlname" placeholder="Last Name" required />
						</label>
						<br>
						<label class="lblem">Email add.:</label>
							<input type='text' name='email' class="txtem" placeholder="sample@gmail.com" />
						<br>
						<label class="lbladd">Address:</label>
							<input type='text' name='address' class="txtadd" placeholder="Complete Address" required />
						<br>
						<label class="lblun">Username:</label>
							<input type='text' name='usern' class="txtun" placeholder="Username" required />
						<br>
						<label class="lblpw">Password:</label>
							<input type='password' name='pass' class="txtpw" placeholder="Password" required />
						<br>
						<label class="lblcpass">Confirm:</label>
							<input type='password' name='cpass' class="txtcpass" placeholder="Confirm Password" required />
						<br>
						<label class="lblcon">Contact no.:</label>
							<input type='text' name='contact' class="txtcon" placeholder="09X-XXXX-XXXX" required />
							<input type='text' name='onetimepin' class='u_otp' placeholder="Insert OTP Code" />
							<button type='submit' name='getcode'class='g_code'>SEND CODE</button>
						
							FOR ONE TIME PIN via MOBILE NUMBER 
							SAMPLE:	__________________
								   |__________________| [SEND CODE]
								   
						-->	

<?php

include ("../dbase/dbaseconnection.php");

use PHPMailer\PHPMailer\PHPMailer, PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

        
if(isset($_POST['create'])){
    $fname=$_POST['fname'];
    $mid=$_POST['mi'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $email = $_POST['email'];
    $address=$_POST['address'];
    $username=$_POST['usern'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    $mail = new PHPMailer(true);

    $uppercase = preg_match('@[A-Z]@', $pass);
	$lowercase = preg_match('@[a-z]@', $pass);
	$number    = preg_match('@[0-9]@', $pass);
	$pattern = "/((\+[0-9]{2})|0)[.\- ]?9[0-9]{2}[.\- ]?[0-9]{3}[.\- ]?[0-9]{4}/";	

			
	if($pass == $cpass){
		if(!$uppercase || !$lowercase || !$number || strlen($pass) < 8) {
				?>
					<script>
						alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');
                    </script>
				<?php
		}	

		elseif(!preg_match($pattern, $contact)) {
				?>
					<script>
						alert('Phone number is Invalid');
					</script>
				<?php
		} 
				
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			    ?>
				    <script>
						alert("Invalid email format");
				  	</script>
			    <?php   
		}

		else {
            try {
                //$mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";
                $mail->Host = "smtp.sendgrid.net";
                $mail->Port = "2525";
                //$mail->Host = "mail.smtp2go.com";
                //$mail->Port = "2525";
                $mail->Username = "apikey";
                $mail->Password = "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";
                    
                //$mail->SMTPDebug=true;
        
                $mail->setFrom('fpsudayon5655ant@student.fatima.edu.ph','Boss-B Burgers');
                $mail->addAddress($email,$username);
                $mail->isHTML(true);
        
                $verify_token = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        
                $mail->Header = "Verification";
                $mail->Subject = "Email Verification from Boss-B Burgers";
                $mail->Body = '<p>Your verification code is: <b style="font-size: 25px;">' .$verify_token. '</b></p>';
                    
                $mail->send();
        
                $add = "INSERT INTO user (EMP_ID,EMP_FNAME,EMP_LNAME,EMP_MI,EMP_CONTACTNUM,EMAILADD,verify_token,FULLADD,POSITION,EMP_UNAME,EMP_PASS,U_STATUS)
		        			VALUES(null,'$fname','$lname','$mid','$contact','$email','$verify_token','$address','customer','$username','$pass','DEACTIVATED')";
						
			    $conn->query($add);
					?>
					<!--
						<script>
							alert("SUCCESSFULLY ADDED")
						</script>
					-->
						<!-- New HTML Form for Verification -->
						<html>	
						<head>
							<link rel="stylesheet" href="createaccount.php">
						</head>
							<body>
								<style type="text/css">
									.bg-modal {
										height: 100%;
										width: 100%;
										background-color: rgba(0, 0, 0, 0.8);
										position: absolute;
										top: 0;
										display: flex;
										justify-content: center;
										align-items: center;
									}	
									.modal-content {
										width: 400px;
										height: 200px;
										background-color: white;
										position: absolute;
										border-radius: 8px;
										padding: 20px;
										text-align: center;
									}
									
									p {
										font-size:20px;
									}

									.sub-btn {
										background-color:orange;
										width:150px;
										color:black;
										cursor: pointer;
										font-size: 1.1em;
										border-radius: 20px;
									}
								</style>
								<!-- Verification Modal Section -->
								<div class="bg-modal">
									<div class="modal-content">
										<form action="verify-email.php" method="POST">
											<h2> Verify your Email </h2>
											<input type="hidden" name="user" value="<?php echo $username; ?>"/>
											<p>V-Code Sent here: <input type="text" name="email" value="<?php echo $email; ?>" readonly></input></p>
											<p>Enter Code here: <input type="text" name="v-code"></input></p>
											<input type="submit" class="sub-btn" name="submit" value="SUBMIT"/> 
										</form>
									</div>
								</div>
				
							</body>
						</html>
					<?php

        
            }
            catch(Exception $e) {
                echo "Mailer ERROR: " . $mail->ErrorInfo;
            }
			
		}

	}   
    else{
		?>
			<script>
				alert("Password Confirmation Didn't Match");
			    header(location = "createaccount.php");
            </script>
		<?php
	}
    
      
}

?>