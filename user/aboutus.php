<?php 

	include"../dbase/dbaseconnection.php";
	require_once ('../user/auth.php'); 
?>
<html>
<head>
    <title>About US</title>
    

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type = "text/css">
        body {
            background-image: url("../imgs/bg.jpg");
            background-color: #fffcc4;
            background-repeat: no-repeat;
            padding-top: 3%;
        }

        .container {
            padding: 3% 5% 1.5%;
            background-image: linear-gradient(to bottom right, #ffae00, #fffa9e);
            width: 68%;
            height: 25%;
            border: solid black 1px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,100);
        }   

        .fb-container {
            background-image: linear-gradient(to bottom right, #ffae00, #fffa9e);
            width: 81%;
            margin-top: 2%;
            border: solid black 3px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,100);
        }
        
        h1 {
            font-size: 24px;
            font-weight: 700px;
            font-family: "Times New Roman";
            word-spacing: 0;
            text-align: center;
        }

        .back {
            background-image: linear-gradient(#ffae42, #ff4500);
            color: black;
            margin-top: 10px;
            margin-left: 50px;
            position: absolute;
            border-radius: 15px;
            cursor: pointer;
            font-family: 'Lucida Sans';
            font-size: 30px;
            height: 40px;
            width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,80);
        }

        .back:hover {
            transform: scale(1.1);
            background-image: linear-gradient(#33b5e5,#ddd);
        }

    </style>
</head>
<body>
    <form method = "POST" action = "aboutus.php">
        <button type = "submit" class = "back" name = "back">BACK</button>
    </form>
<center>

    <div class = "container">
            <h1>Every day, more than a hundred guests visit Boss B Burger's restaurant in the local community.
        And they do so because our restaurant is known for serving high-quality, great-tasting, and affordable food.
        <br><br>
            Established in 2020, Boss B Burger is one of the best hamburger chain in Baras, Rizal.
            The original Home of 8" Giant Burger, our commitment to premium ingredients, signature recipes, and  
        family-friendly dining experiences is what has defined our brand for more than 2 successful years.</h1>
    </div>
    
    <div class = "fb-container">                                                                                                                
    <div class="w3-content" style="max-width:100%">

        <div class="mySlides">
            <img src="../imgs/about_img1.jpg" style="max-width:100%">
        </div>

        

        <div class="mySlides">
            <img src = "../imgs/about_img2.jpg" style="margin:auto;max-width:100%">
        </div>

        <div class="mySlides w3-container w3-red">
            <img src = "../imgs/FB.png" style="margin:auto;max-width:100%">
            
        </div>

    </div>
    </div>
    
</center>
    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none"; 
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1} 
        x[slideIndex-1].style.display = "block"; 
        setTimeout(carousel, 3000); 
        }
    </script>

</body>
</html>

<?php
$id = $_SESSION['SESS_MEMBER_ID'];

    if(isset($_POST['back'])) {
        if(!isset($id) || (trim($id) == '')) {
            header("refresh:0; url = ../user/visitor_dashb.php");
    
        }	
        else {
            header("refresh:0; url = ../user/c_dashboard.php");
        }

        
    }
    

?>