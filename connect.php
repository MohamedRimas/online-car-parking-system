<!DOCTYPE html>
<html>
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Payment Form</title>
    <link href="style1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/home.css">
    
    <style>
	.success {
		color: #60b4df;
		font-size: 35px;
		display: flex;
        flex-direction: row;
        top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		position: absolute;
	}
	p5{
		font-size: 20px;
	}
	
	.ccontainer{
		background-color:rgb(245, 244, 244);
        margin: 0 auto;
        padding:20px;
        border: 0.1px ridge #60b4df;
        width: 900px;
        height: 300px;
        box-shadow: 0px 0px 15px #60b4df;
        align-items: center;
  
        display: flex;
        flex-direction: row;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		position: absolute;
	}
	.record{
		display: flex;
        flex-direction: row;
		top: 80%;
		left: 50%;
		transform: translate(-50%, -50%);
		position: absolute;
	}
		
	</style>
	</head>
<body>	

<header>

        <div class="container">

            <div class="logo-container">
                <img src="image/IMG.jpeg" width="100" height="50" class="left"> &nbsp;
                <h3 class="logo">Ez-<span>Park</span></h3>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="AHome.html"><u>HOME</u></a>
                        </li>

                        <li class="nav-link" style="--i: 1.35s">
                            <a href="Help.html"><u>HELP</u></a>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="#"><u>ABOUT</u></a>
                        </li>

                    </ul>
                </div>


                <div class="log-sign" style="--i: 1.8s">
                    <a href="login.php" class="btn transparent">Log in</a>
                    <a href="singup.php" class="btn solid">Sign up</a>
                    <img src="image/logo.png" width="60" height="60" class="right"> &nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>

</header>


	
<?php

//Linking the configuration file
require 'config.php';



 $fullname = $_POST['fullname'];
 $email = $_POST['email'];
 $number = $_POST['phonenum'];
 $postalcode = $_POST['pcode'];
 $card = $_POST['card'];
 

// Check connection
$sql = ("INSERT INTO Unregistered_Payment(pay_id,fullname,email,phonenum,postalcode,card)VALUES('','$fullname','$email',$number,$postalcode,'$card')");
 
if($conn->query($sql)){
	echo "<div class='ccontainer'>";
	echo "<p4 class= 'success'><center>";
	echo "Payment processed Successfully.";
	echo "</p4>";
	echo "<br>";
	echo "<p5>";
	echo "Your Reservation has been completed.";
	echo "<br>";
	echo "</p5>";
	echo "Thank You. Enjoy!";
	echo "</center></div>";
	echo "<br>";
	echo "<p6 class='record' font-size='12px'><a href='records.php'>";
    echo "View Payment Records";
	echo "</a></p6>";
	
	
}
else{
	echo "failed to insert".$conn->error;
	
}

 $conn->close();
 
 ?>
 <footer class="footer">

        <div class="container0">
            <div class="row0">
                <div class="footer-col">
                    <h4>GET US ON</h4>
                    <ul>
                        <a href="https://play.google.com/store/apps">
                            <img src="image/play.png" width="150" height="60" class="left"></a> <br>

                        <a href="https://www.apple.com/app-store/">
                            <img src="image/apps.png" width="150" height="60" class="left"></a><br>
                        <div class="p5">
                            <p>Ezpark.2021.All Right Reserved</p>
                        </div>


                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Quick-links</h4>
                    <ul>
                        <li><a href="AHome.html"><U>HOME</U></a></li>
                        <li><a href="Contact Us.html"><U>CONTACT US</U></a></li>
                        <li><a href="#"><U>ABOUT</U></a></li><br>

                </div>


                <div class="footer-col">
                    <h4>follow-us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/login.php"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://accounts.google.com/login?service=mail&lp=1
                        "><i class="fab fa-google"></i></a>
                        <a href="https://www.instagram.com/accounts/login"><i class="fab fa-instagram"></i></a>


                    </div>

                </div>
                <div class="footer-col">

                    <div class="social-links"><br>
                        <img src="image/IMG.jpeg" width="100" height="50" class="left"> <br> <br><br><br>
                        <a href="https://sdg2.mastercard.com">
                            <img src="image/card.png" width="180" height="50" class="left"></a>

                    </div>


                </div>
                <div class="arrow">
                    <a href="index.html"><img src="image/arrow.png"></a>
                </div>
            </div>






    </footer>	
 </body>
 </html>