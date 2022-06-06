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
	$contact = '000-0000-0000';
	$pattern = "/((\+[0-9]{2})|0)[.\- ]?9[0-9]{2}[.\- ]?[0-9]{3}[.\- ]?[0-9]{4}/";
    $numbers = [
        // Valid
        '+63.917.123.4567',
        '+63-917-123-4567' ,
        '+63 917 123 4567',
        '+639171234567',
        '09171234567',
        
        // Invalid
        'aaa',
        '1234567890',
        '0000000000',
        '0917123456A',
        '',
        null,
    ];

			
	if($pass == $cpass){
		if(!$uppercase || !$lowercase || !$number || strlen($pass) < 8) {
				?>
					<script>
						alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');
                    </script>
				<?php
                header("refresh = 0; url = createaccount.php");
		}	

		elseif(!preg_match($pattern, $contact)) {
				?>
					<script>
						alert('Phone number is Invalid');
					</script>
				<?php
                header("refresh = 0; url = createaccount.php");
		} 
				
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			    ?>
				    <script>
						alert("Invalid email format");
				  	</script>
			    <?php   
                header("refresh = 0; url = createaccount.php");
		}

		else {
            try {
                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";
                $mail->Host = "smtp.sendgrid.net";
                $mail->Port = "2525";
                //$mail->Host = "mail.smtp2go.com";
                //$mail->Port = "2525";
                $mail->Username = "apikey";
                $mail->Password = "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";
                    
                $mail->SMTPDebug=true;
        
                $mail->setFrom('fpsudayon5655ant@student.fatima.edu.ph','Boss-B Burgers');
                $mail->addAddress($email,$username);
                $mail->isHTML(true);
        
                $verify_token = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        
                $mail->Header = "Verification";
                $mail->Subject = "Email Verification from Boss-B Burgers";
                $mail->Body = '<p>Your verification code is: <b style="font-size: 25px;">' .$verify_token. '</b></p>';
                    
                $mail->send();
        
                $add = "INSERT INTO user (EMP_ID,EMP_FNAME,EMP_LNAME,EMP_MI,EMP_CONTACTNUM,EMAILADD,FULLADD,POSITION,EMP_UNAME,EMP_PASS,U_STATUS)
		        				VALUES(null,'$fname','$lname','$mid','$contact','$email','$address','customer','$username','md5($pass)','DEACTIVATED')";
						
			    $conn->query($add);
				?>
					<script>
						alert("SUCCESSFULLY ADDED")
					</script>
				<?php

                ?>
                  <!-- Verification Modal Section -->
                  <html>
                      <head>
                      <link rel="stylesheet" href="createaccount.php">
                      </head>
                          <body>
                          <style type="text/css">
                            .bg-modal {
                                height: 100%;
                                width: 100%;
                                background-color: black;
                                opacity: 0.8;
                                position: absolute;
                                top: 0;
                            }
                          </style>
          
                          <div class="bg-modal">
                          
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