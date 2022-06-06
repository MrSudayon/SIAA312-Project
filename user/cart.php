<?php 
	require_once ('auth.php'); 
	include ('../dbase/dbaseconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../icons/logo.png">
    <title>Carts - Boss B Burgers</title>
  <style>
  
  body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: white;
  }
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
<body topmargin="10px" leftmargin="100px" rightmargin="100px">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {box-sizing: border-box;}

  body { 
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background:white;
  }
   .row h2{
	text-align:center;
    background-image: linear-gradient(#ffae42, #ff4500);
	margin:0px;
    overflow: hidden; 
    padding:25px /*10px*/;  
   }
  .header {
    overflow: hidden;
    background-color:#FF8C00;
  }

  .header p {
    font-size: 2.3em;
    font-family: 'Gabriola';
	color:black;
	margin-left:200px;
	margin-top:30px;
	position:absolute;
  }
  .header-right  a {
    font-family: Arial, Helvetica, sans-serif;
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 6px;
    margin-left: .5%;
    background:none;
    text-decoration: none;
    font-size: 1.2em;
    border-radius: 100px;
    cursor: pointer;
  }

  .header a.logo {
    font-size: 25px;
    font-weight: bold;
  }

  .header-right  a:hover {
	  transform: scale(1.1);
    color: white;
    background-image: linear-gradient(#ffae42, #ff4500);
  }

   .header-right a.active {
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(#ffae42, #ff4500);
    color: black;
    float:right;
  }

  .header-right a.active:hover {
    color: white;
  }

  .header-right {
      overflow: hidden;
      background-color:#151c1f;
      padding:15px ;
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
    background-color:#FF8C00;
    color: black;
    font-size: 12px;
  }

  /* Page Content */
  .content {padding:20px;}
  </style>

  <style>
  .addbut {
    text-align: center;
    font-size: 12px;
    background-color: green;
    border: none;
    color: #FFFFFF;
    padding: 5px;
    width: 80px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    display: inline-block;
    border-radius: 4px;
  }
  .button1 {
    text-decoration: none;
    display: inline-block;
    border-radius: 4px;
    background-color: green;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 12px;
    padding: 6px;
    width: 100px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }
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


  <div class="header">      
  <p>Home of 8" Giant Burger, All-in Food Restaurant.</p>
    <a href="c_dashboard.php" class="logo"><img src="../icons/logo.png" alt="Logo" width="120px"></a>

  </div>


  <div class="row">
               
    <div class="header-right">

<?php
  $id_no=$_SESSION['SESS_MEMBER_ID'];

  $query2=mysqli_query($conn,"select * from cart where C_ID='$id_no' and status='Pending'")or die(mysqli_error($conn));
  $count=mysqli_num_rows($query2);
?>
      <a href="c_dashboard.php">Home</a>
      <a href="pending.php">Orders</a>
      <a class="active" autofocus="autofocus" href="cart.php">Cart (<?php echo $count;?>)</a>
    </div>   

  <h2>Cart Lists</h2>
  <style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid black;
    background-color: rgba(255, 255, 255, 0.2);
  }

  .row {
    background-color: white;
  }

  h2 {
      /* TOP RIGHT BOTTOM LEFT*/
    margin: 3px 0 12px 25px; 
    padding-top: .5%;
  }

  th, td {
    text-align: left;
    padding: 15px;
  }

  tr:nth-child(even) {
    background-color: #ddd
  }
  
  .c_note{
    width: 250px; height: 110px;
    font-size:larger;
  }

  .mop_selection {
    width: 25%;
  }
  </style>
  </head>
  <body>
  <div style="overflow-x:auto;">
   <table>
     <tr>
        <th>Product</th>
        <th>Price</th>
        <th style="width:10%">Quantity</th>
        <th style="width:20%">Total</th>
        <th>Action</th>
     </tr>

            <?php
                $id=$_SESSION['SESS_MEMBER_ID'];

                $total=0;
                
                $query=mysqli_query($conn,"select * from cart where C_ID='$id' and status='Pending' ")or die(mysqli_error($conn));
                
                while($row=mysqli_fetch_array($query)){
                $s_total = $row['total'];
                $total = $total + $row['total'];
                $ii=$row['ID'];
                $prodname = $row['PROD_ID'];
            ?>
     <tr>
      <th><?php echo $row['PROD_ID'];?></th>
      <th>&#8369; <?php echo $row['price'];?></th>
      <th><?php echo $row['qty'];?></th>
      <th>&#8369; <?php echo $s_total;?></th>
      
      <th><a class="button" href="cancel.php?id=<?php echo $ii;?>&id_no=id=<?php echo $id;?>" onClick="return confirm('Are you sure you want to cancel?')">Cancel</a><br>		
          <a class="button" href="update.php?p_id=<?php echo $row['PROD_ID'];?>&id=<?php echo $ii;?>&id_no=<?php echo $row['qty'];?>&price=<?php echo $row['price'];?>">Update</a>			
      </th>
     </tr>

  

  <?php
         }
    $gtotal=$total*0.12+$total;
    
  ?>
  
    <form method="get">
      <tr>
        <th></th>
        <th></th>
        <th>Total</th>
        <th>&#8369; <?php echo number_format($total,2);?></th>
        
        <th>
              <?php
                $queryadd="select * from user where EMP_ID='$id_no'";
                $result = $conn->query($queryadd);
                
                if ($result->num_rows > 0) 
                {
                  while($row = $result->fetch_assoc()) 
                  {
                    echo $row["FULLADD"];
                  }	
                }		
              ?>  
          <label value="<?php echo $row; ?>"><?php echo $row; ?></label>
          <a class='button1' href="profile.php">Edit Address</a>
            
          <br><br>Mode of Payment:<br>
          <select name='payment' id='sel' style='width:30%'>
            <option value=''>Select Payment Method</option>
            <option value='COD'>COD</option>
            <option value='GCASH'>GCASH</option>
          </select>

       
        </th>
      </tr>
    
      <tr>
        <th></th>
        <th></th>
          <th>Total 12% VAT</th>
        <th>&#8369; <?php echo number_format($total*0.12,2);?></th>
        <th rowspan=3 style="background-color: #ddd">

          <textarea name="remarks" id="cnotes" style='height:100px;width: 30%;top:0' placeholder='Landmark...'></textarea>
          <script type="text/javascript">
            document.getElementById('sel').value = "<?php echo $_GET['payment'];?>";
            document.getElementById('cnotes').value = "<?php echo $_GET['remarks'];?>";
          </script> 
          
          <br>
          <input name="proceed" type="submit" class="addbut" value="Apply" />
        </th>
      </tr>

      <tr>
        <th></th>
        <th></th>
          <th>Grand Total</th>
        <th>&#8369; <?php echo number_format($gtotal,2);?></th>
      </tr>

      <tr>
        <th></th>
        <th></th>
        <th></th>
        <?php
        if(isset($_GET['proceed'])){
          $pm = $_GET['payment'];
          $cnotes = $_GET['remarks'];
        }
        ?>
        <th><a class='button' href="order_submit.php?id=<?php echo $id_no;?> &idno=<?php echo $ii;?> &pprice=<?php echo $total;?> &mop=<?php echo $pm; ?> &cnotes=<?php echo $cnotes;?>">Order</a>
    
      </tr>
    </form>
  </table>
  <br><br>  
               
    </div>
  </div>
  <br><br><br><br><br><br><br>
  <div class="footer">
    <p>2021 © All rights reserved.</p>
  </div>

</body>
</html>
