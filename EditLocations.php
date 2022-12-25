<?php

include_once'config.php';

?>
<?php
   $Location_Id=$_GET['id'];             
   $Location_Name=$_GET['name'];
   $Description=$_GET['desc'];
   $Hourly_Price=$_GET['price1'];
   $Monthly_Price=$_GET['price2'];

	

?>   

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/styles.css">
	  <link rel="stylesheet" href="css/style.css">
	 
	  
	
    <title>EZ-PARKING</title>
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
	
       <div style="border-style:groove;border-color:DarkBlue">
           <form action="Updatelocations.php" method="GET" name="form2">
             <table border="0" width ="25%">
            <tr>
              <td>Location ID</td>
             <td><input type="text" value="<?php echo" $Location_Id"?> "name="feild0" readonly></td>
            </tr>
 
           <tr>
            <td>Location Name</td>
            <td><input type="text" value="<?php echo"$Location_Name"?> "name="Name"></td>
           </tr>
   
   
           <tr>
            <td>Description</td>
             <td><input type="text" value="<?php echo"$Description"?> "name="Descp"></td>
           </tr>
	
	     <tr>
         <td>Hourly Price</td>
         <td><input type="text" value="<?php echo"$Hourly_Price"?> "name="HPrice"></td>
         </tr>
	
	    <tr>
        <td>Monthly Price</td>
        <td><input type="text" value="<?php echo"$Monthly_Price"?> "name="MPrice"></td>
        </tr>
	
	    <tr>
	    <td></td>
        <td><input type="submit"  value="Update"  name="submit"></td>
	    </tr>

       </table> 
    </form>
   
  </div>
	
	<footer class="footer">

        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>GET US ON</h4>
                    <ul>
                        <a href="https://play.google.com/store/apps">
                            <img src="image/play.png" width="150" height="60" class="left"></a> <br>

                        <a href="https://www.apple.com/app-store/">
                            <img src="image/apps.png" width="150" height="60" class="left"></a><br>
                        <div class="p3">
                            <p>Ezpark.2021.All Right Reserved</p>
                        </div>


                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Quick-links</h4>
                    <ul>
                        <li><a href="#"><U>HOME</U></a></li>
                        <li><a href="#"><U>CONTACT US</U></a></li>
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
                            <img src="image/card.png" width="200" height="50" class="left"></a>

                    </div>


                </div>
                <div class="arrow">
                    <a href="index.html"><img src="image/arrow.png"></a>
                </div>
            </div>

    </footer>
   </body>

</html>
