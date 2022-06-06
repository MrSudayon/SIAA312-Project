
<?php require_once ('auth.php');?>
<?php include ('../dbase/dbaseconnection.php');?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="../icons/logo.png">
    <title>To Ship - Boss B Burgers</title>
  <style>

  .header12 {
    background: white;
    color: white;
    font-size: 12px;
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
    background-color: #f1f1f1;
    padding:15px;
    border-radius: 4px;
  }

  .topnav a {
    float: left;
    display: block;
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    border-radius: 4px;
  }

  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }

  .topnav a.active {
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
  }
  </style>
  </head>
  <body>


  <div class="row">
  <div class="header12">
    <a href="c_dashboard.php" class="logo"><img src="../icons/logo.png" alt="Logo" width="120px"></a>
  </div>

    
  </div>
  <div class="topnav" id="myTopnav"> 

    <?php
    $id_no=$_SESSION['SESS_MEMBER_ID'];
      $query2=mysqli_query($conn,"select * from cart where C_ID='$id_no' and status='Pending'")or die(mysqli_error($conn));
      $count=mysqli_num_rows($query2);

    
    ?>      <a href="c_dashboard.php">Home</a>
      <a class="active" href="cart.php">Cart(<?php echo $count;?>)</a>
      <a href="pending.php">Pending Orders</a>
      <a href="ship.php">To Ship</a>
        <a href="recieve.php">To Recieve</a>
          <a href="history.php">History</a>
              <a href="profile.php">Profile</a>
                  <a href="logout.php">Logout</a>
  
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  
  </div>



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
  <body >
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {box-sizing: border-box;}

  body { 
    margin: 30px;
    font-family: Arial, Helvetica, sans-serif;
  }

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
    background-image: linear-gradient(#FFF3D9, #A3FFF2);
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
  </style>
  </head>

  <body>




  <div class="row">
    <div class="header1">
      <h1>List of Delivery</h1>
      <p>"Home of 8" Giant Burger.
          All-in Food Restaurant"</p>
    </div>
  </div>
  <div class="row">
                  
    <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}
    </style>
    </head>
    <body>

    <h2>Delivery</h2>
    <div style="overflow-x:auto;">
    <table>
      <tr>
        <th>Transaction Code</th>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Status</th>
      </tr>

  <?php
      $id=$_SESSION['SESS_MEMBER_ID'];
        
      $total=0;

      $query=mysqli_query($conn,"select * from cart where C_ID='$id' and status='Approved' order by ordercode")or die(mysqli_error($conn));
      while($row=mysqli_fetch_array($query)){
      $total=$total+$row['total'];
      $ii=$row['ID'];
    
  ?>
    <tr>
        <th><?php echo $row['ordercode'];?></th>
      <th><?php echo $row['PROD_ID'];?></th>
      <th>&#8369; <?php echo $row['price'];?></th>
      <th><?php echo $row['qty'];?></th>
        <th>&#8369; <?php echo $row['total'];?></th>
        <th><?php echo $row['status'];?></th>
    </tr>
    
    <?php
      }
      
      $gtotal=$total*0.12+$total;
    ?>

  </table>
            
            <br><br>          

  </div>

  </div>

	<div class="footer">
	  <p>2021 © All rights reserved. Developed by <a class="dev_link" href="developer">Diamond Dogs</a></p>
	</div>

</body>
</html>

