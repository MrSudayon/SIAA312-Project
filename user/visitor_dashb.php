<?php 
	include ('../dbase/dbaseconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="../icons/logo.png">
    <title> Boss B Burgers </title>
  <style>

  .header12 {
      padding: 10px;
      background: transparent;
      color: white;
      font-size: 12px;
  }
  body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: white;
  }

  .topnav {
      overflow: hidden;
      background-color:#151c1f;
      padding: 5px;
  }

  .topnav a {
	  font-family: Arial, Helvetica, sans-serif;
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 5px;
	    background:none;
      text-decoration: none;
      font-size: 1.2em;
      border-radius: 4px;
      cursor: pointer;
  }

  .topnav a:hover {
	transform: scale(1.1);
    color: white;
    background-image: linear-gradient(#ffae42, #ff4500);
  }

  .topnav a.home {
    font-family: Arial, Helvetica, sans-serif;
    color: white;
    background-image: linear-gradient(#ffae42, #ff4500);
  }

  .topnav a.active {
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(#ffae42, #ff4500);
    color: black;
    float:right;
  }

  .topnav a.active:hover {
    color: white;
  }

  .topnav .icon {
    display: none;
  }

  .mainheader{
    font-family:"San Serif";
      font-size: 2vw;
      text-align:center;
      color: white;
      background-color:black;
      width:100%;
  }

  .nav_opt a{
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  }

  .dropbtn {
    background-image: linear-gradient(#ffae42, #ff4500);
    align-items: center;
    width: 80px;
    font-family: 'San Serif';
    font-size: 14px;
    border: none;
    border-radius: 50px;
    box-shadow: 0px 8px 8px 0px rgba(0,0,0,0.2);
  	transition: transform .2s;
    cursor: pointer;
  }

  .dropbtn:hover {
    transform: scale(1.3);
  }
  .dropdown {
    float: right;
    margin-right:20px;
    margin-top:20px;
  }

  .dropdown-cont {
    display: none;
    position: absolute;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    background-image: linear-gradient(#ffae42, #ff4500);
    z-index: 1;
  }

  .dropdown-cont a {
    color: black;
    text-decoration: none;	
    font-size: 2em;
    font-family: 'San Serif';
  }

  .dropdown-cont a:hover {
    background-color:#151c1f;
	color:white;
    font-size: 2.1em;
  }

  .dropdown:hover .dropdown-cont {
    display: block;
  }

  @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) { display: none; }
      .topnav a.icon {
        float: right;
        display: block;
        background-color: transparent;
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
        text-align: center;
      }
    }
    
  a.cdropbtn{
    padding: 5px;
  }

  .cdropbtn {
    color: black;
    padding: 8px;
    font-size: 14px;
    border: none;
  }

  .cdropbtn:hover{
    background-color:#151c1f;
  }

  .cdropdown {
    float: left;
    margin-left: 5px;
  }

  .cdropdown-cont {
    display: none;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    position: absolute;
    background-color:#151c1f;
    z-index: 1;
  }

  .cdropdown-cont a {
    color: white;
    text-align: center;
    font-family: 'San Serif';
    text-decoration: none;	
    font-size: 1em;
    width: 140px;
  }

  .cdropdown-cont a:hover {
    background-color: dodgerblue;
  }

  .cdropdown:hover .cdropdown-cont {
    display: inline-block;
  }

  .cdropdown-cont .cat_btn {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden; 
  }

  </style>
  </head>
 

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
    background-color:#DCDCDC;
    padding: 15px;
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
	margin-top:30px;
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
    padding:5px;
    text-align: center;
	background-color:#FF8C00;
    color:white;
	font-family:arial;
    font-size: 12px;
    margin-top: 30px;
	text-shadow: 2px 1px black;
  }

  form.search_cust input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background:#DCDCDC;
    margin-top: 30px;
    margin-bottom: 5px;
  }

  form.search_cust button {
    float: left;
    width: 20%;
    padding: 11px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
    margin-top: 30px;
  }

  form.search_cust button:hover {
    background: #0b7dda;
  }

  form.search_cust::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Page Content */
  .content {padding:20px;}
  </style>

  <style>
  .button {
    display: inline-block;
    border-radius: 35px;
    background-color: #FFA500;
    border: none;
    color: black;
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

  .header2 {
    padding: 0px 20px 15px;
    text-align: center;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    font-size: 2.5em;
    font-family: 'Gabriola';
  }

  .header3 {
    background-color:#FF8C00;
    padding:10px;
	  height:150px;
  }

  .header3 h1 {
    text-align: left;
    font-size: 2em;
    font-family: Arial, Helvetica, sans-serif;
    color:black;
    margin-top:0px;
    position:absolute;
  }

  .header3 p {
    font-size: 2em;
    font-family: 'Gabriola';
    color:black;
    margin-left:200px;
    margin-top:30px;
    position:absolute;
  }
  .about {
    font-size: 1.1em;
    font-family: Arial, Helvetica, sans-serif;
    color:black;
    float: right;
    text-decoration: none;
    margin-right:30px;
    margin-top:50px;
  }
  .about:hover {
    transform: scale(1.3);
    color: #ddd;
  }

  .help {
    font-size: 1.1em;
    font-family: Arial, Helvetica, sans-serif;
    color:black;
    float: right;
    text-decoration: none;
    margin-right:20px;
    margin-top:50px;
  }

  .help:hover {
    transform: scale(1.3);
    color: #ddd;
  }

  .dev_link {
    text-decoration: none;
    color: white;
  }
  
  .food-card {
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,.5); 
    cursor: pointer;
  }

  </style>
  </head>

  <body>
      <div class="header3">
		<div class="dropdown">
            <a href="signin.php"><button class="dropbtn"><img src="../icons/usericon.png" href="signin.php" style="margin:auto;max-width:100%"></img></button></a>
      
         </div>
			<a class="about" href="aboutus.php" >About Us</a>&nbsp;
			<!--<a class="help" href="help.php">Help</a> &nbsp;-->
		 <p>Home of 8" Giant Burger, All-in Food Restaurant.<p>
       <h1><img src="../icons/logo.png" class="logo" style="max-width:20%"></h1>
	 </div>
  <div class="topnav" id="myTopnav"> 

          <div class = "nav_opt">
            <a class='home' href="visitor_dashb.php">Home</a>
            <form method=POST action='visitor_dashb.php'>
              
              <div class="cdropdown">
                <a class="cdropbtn" autofocus="autofocus">Category</a>
                <br><br>
                  <div class="cdropdown-cont">
                    <button type='submit' class="cat_btn" name="burger" style="margin:0px auto"><a>BURGERS</a></button><br>
                    <button type='submit' class="cat_btn" name="meals" style="margin:0px auto"><a>MEALS</a></button><br>
                    <button type='submit' class="cat_btn" name="bvrgs" style="margin:0px auto"><a>PARTY TRAY</a></button><br>
                  </div>
              </div>
            </form>
          </div>

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

      <form method="POST" class="search_cust" action="visitor_dashb.php" style="margin:auto;max-width:40%">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
      </form>
<div class="row">

  <?php
        if(isset($_POST['search'])) {
            
          $search = $_POST['search'];
          $search = preg_replace("#[^0-9a-z]i#","", $search);

          $query = mysqli_query($conn, "SELECT * FROM products WHERE PROD_NAME LIKE '%".$search."%' ") or die ("Could not search"); 
          
        } 
        
        else if(isset($_POST['burger'])) {
          
          $query = mysqli_query($conn, "SELECT * FROM products WHERE CATEGORY='Burgers' AND AVAILABILITY='Available'") or die ("Category is Empty");
        
        }
        
        else if(isset($_POST['meals'])) {
          
          $query = mysqli_query($conn, "SELECT * FROM products WHERE CATEGORY='Meals' AND AVAILABILITY='Available'") or die ("Category is Empty");
        
        }
        
        else if(isset($_POST['bvrgs'])) {
          
          $query = mysqli_query($conn, "SELECT * FROM products WHERE CATEGORY='Partytray' AND AVAILABILITY='Available'") or die ("Category is Empty");
        
        }

        else {
          $query=mysqli_query($conn,"select * FROM products WHERE AVAILABILITY='Available' ORDER BY PROD_NAME")or die(mysqli_error($conn));

        }
          while($row=mysqli_fetch_array($query)) {			
  ?>	
        <div class="col-3 col-s-12">	  
          <div class="food-card"style="border-radius:25px 25px 25px 25px">
            <div class="header1" style="border-radius:25px 25px 0px 0px" > 
            <h1><?php echo strtoupper($row['PROD_NAME']);?></h1>
              <p><input type="hidden" value="<?php echo $row['PROD_ID'];?>" name="prod_id"></p>
            </div>

            <div class="aside"  style="border-radius: 0px 0px 25px 25px">
              <center>
                <h2><img style="width:250px;height:200px" src="../imgs/<?php echo $row['IMAGE'];?>"></h2>
              </center>
                <h3><font color="green">&#8369;<?php echo number_format($row['PRICE'],2);?></font></h3>

                  <a class="button" href="signin.php" style="vertical-align:middle"><span> Add to Cart </span></a>
			</div>
          </div> 
        </div>
  <?php
    }
  ?>
    
  </div>

    <div class="footer">
      <p>2021 © All rights reserved. Developed by <a class="dev_link" href="developer">Diamond Dogs</a></p>
    </div>

</body>
</html>