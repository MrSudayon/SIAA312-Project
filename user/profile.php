<?php require_once ('auth.php');?>
<?php include ('../dbase/dbaseconnection.php');?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="../icons/logo.png">
	<title>Profile - Boss B Burgers</title>
<style>

  body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: white;
  }
.header12 {
  background: white;
  color: white;
  font-size: 12px;
}

  .header12 p {
    font-size: 2.3em;
    font-family: 'Gabriola';
	color:black;
	margin-left:200px;
	margin-top:30px;
	position:absolute;
  }
.header12 a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header12 a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header12 a:hover {
  background-color: #ddd;
  color: black;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:#151c1f;
  position: relative;
  padding:15px
}

.topnav a {
  float: left;
  display: block;
  color: white;
  font-weight: bold;
  text-align: center;
  margin-left: .5%;
  padding: 6px;
  text-decoration: none;
  font-size: 17px;
  border-radius: 100px;
}

.topnav a:hover {
  background-image: linear-gradient(#ffae42, #ff4500);
  color: black;
}

.topnav a.active {
  background-image: linear-gradient(#ffae42, #ff4500);
  color: black;
}

.topnav a.profile {
  background-image: linear-gradient(#ffae42, #ff4500);
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .header12.responsive p {
    float: none;
    display: block;
    text-align: left;
  }
}

</style>
</head>
<body>


<div class="row">
  <div class="header12">
      <p>"Home of 8" Giant Burger. All-in Food Restaurant"</p>
    <a href="c_dashboard.php" class="logo"><img src="../icons/logo.png" alt="Logo" width="120px"></a>
  </div>
</div>
<div class="topnav" id="myTopnav"> 
  <?php
      $id_no=$_SESSION['SESS_MEMBER_ID'];
      $query2=mysqli_query($conn,"select * from cart where C_ID='$id_no' and status='Pending'")or die(mysqli_error($conn));
      $count=mysqli_num_rows($query2);
  ?>
      <a href="c_dashboard.php">Home</a>
      <a class="active" class="profile" href="profile.php" autofocus="autofocus">Profile</a>
</div>   

      <div class="topnav" id="myTopnav" style="background-color:#525252;">
        <a class="history" href="history.php" style="float: right;">History</a>
        <a class="orders" href="pending.php" style="float: right;">Orders</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>

      </div>


      

</style>
</head>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.row{
  
    background-color:#FF8C00;
}
.row1{
  
    background-color:white;
}
.row2{
  
    background-color:white;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #0489bd;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #f2fcff;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #151c1f;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
  margin-top:350px;
  position:relative;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
.header1 {
  padding: 10px;
  text-align: center;
    background-image: linear-gradient(#ffae42, #ff4500);
  color: black;
  font-size: 12px;
}

/* Page Content */
.content {padding:20px;}
</style>

<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #144f92;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 12px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.profile-content {
	padding-left: 30%;
	position:relative;
}
/** 
header2 {
	padding: 50px;
    background-image: linear-gradient(#ffae42, #ff4500);
	color: black;
	font-size: 12px;
}



.edit-prof {
  padding-left: 45%;
}

.edit-p{
  text-decoration: none;
  background-image: linear-gradient(#ddd,#33b5e5);
  position: absolute;
  padding: 8px;
  color: black;
  font-size: 1em;
  box-shadow: 0px 5px 12px 0px rgba(0,0,0,.5);
  border: 1px solid black;
  border-radius: 10px;
  cursor: pointer;
}

.edit-p:hover {
  transform: scale(1.1);
  background-image: linear-gradient(#33b5e5,#ddd);
}
*/


button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  border: none;
  cursor: pointer;
  width: 8%;
  opacity: 0.9;
  box-shadow: 0px 5px 12px 0px rgba(0,0,0,.5);
}

button.edit {
  margin-left: 580px;
  position: absolute;
  border-radius: 15px;
}

button:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .updatebtn {
  width: 50%;
  float: right;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.updatebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 25px;
  text-align: center;
  box-shadow: 0px 5px 12px 0px rgba(0,0,0,.5);
  width: 100%;
}



.edit {
  position: absolute;
  left: 30%;
  border-radius: 15px;
  text-decoration: none;
  text-align: center;
  background-color: #13e000;
  color: black;
  padding: 14px 20px;
  border: none;
  cursor: pointer;
  width: 6%;
  opacity: 0.9;
  box-shadow: 0px 5px 12px 0px rgba(0,0,0,.5);
}

.edit:hover {
  color: white;
  background-color: #04AA6D;
}

</style>
</head>
<body>

<div class="row2">		
	<div class="header2">
  <br><br>
<center>	
	<h1> Profile Settings </h1>
</center>
<?php
		$id_no = $_SESSION['SESS_MEMBER_ID'];
			
		$qry = mysqli_query($conn,"SELECT * FROM user WHERE EMP_ID = '$id_no'");
		
		while($row=mysqli_fetch_assoc($qry)) {
?>

<form action="profile.php" method="POST">
    <div class="profile-content">
    <table> 
      <button type="submit" class="edit" name="save">Save</button>
      <tr>
        <th>Last Name: </th>
        <th><input type="text" name="lname" value="<?php echo $row['EMP_LNAME'];?>"></input></th>
      </tr>
        
      <tr>
        <th>First Name: </th>
        <th><input type="text" name="fname" value="<?php echo $row['EMP_FNAME'];?>"/></th>
      </tr>

      <tr>
        <th>Middle: </th>
        <th><input type="text" name="mi" value="<?php echo $row['EMP_MI'];?>"/></th>
      </tr>

      <tr>
        <th>Contact No.: </th>
        <th><?php echo $row['EMP_CONTACTNUM'];?></th>
      </tr>

      <tr>
        <th>Email-Add: </th>
        <th><input type="email" name="emailadd" value="<?php echo $row['EMAILADD'];?>"/></th>
      </tr>

      <tr>
        <th>Address: </th>
        <th><input type="text" name="fulladd" value="<?php echo $row['FULLADD'];?>"/></th>
      </tr>
      
    
		</div>


    <?php
    }
    ?>
    
    </table>
</form>    
	</div>
</div>


	<div class="footer">
	  <p>2021 © All rights reserved. Developed by <a class="dev_link" href="developer">Diamond Dogs</a></p>
	</div>

</body>
</html>

<!-- EDIT PROFILE -->

<?php
  if(isset($_POST['save'])) {

    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mi = $_POST['mi'];
    $email = $_POST['emailadd'];
    $fulladd = $_POST['fulladd'];

    $sql1 = "UPDATE user SET EMP_FNAME = '$fname', EMP_LNAME = '$lname', EMP_MI = '$mi', EMAILADD = '$email', FULLADD = '$fulladd' WHERE EMP_ID = '$id_no'";
    $conn->query($sql1);
      ?>
        <script>
          alert ('Succesfully updated!');
        </script>
      <?php
      header("Location: ../user/c_dashboard.php");
      
  } else {
    ?>
        <script>
          header("refresh:0;url = ../user/c_dashboard.php");
        </script>
      <?php
  }
  
?>
