<?php
include_once'config.php';

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
	
	
	   <br><br><br><br><br><br><br><br>
   <div  style="border-style:groove;border-color:DarkBlue">
   <table width="100%" border="1">       
       <tr>
	        <th class="col1">Location ID</th> 
            <th class="col2">Location Name</th> 		
            <th class="col3">Description</th>      
            <th class="col4">Hourly Price</th> 
			<th class="col5">Monthly Price</th> 
            <th class="col6">Edit</th> 
            <th class="col7">Delete</th> 			
	 </tr>
	 
	<?php
	$sql="select* from locations";
   $result= $conn->query($sql);
   
   if($result->num_rows>0){
	   while($row=$result->fetch_assoc())
	   {
		  echo"<tr><td>".$row["Location_Id"]."</td>";
		  echo"<td>".$row["Location_Name"]."</td>";
		  echo"<td>".$row["Description"]."</td>";
		  echo"<td>".$row["Hourly_Price"]."</td>";
		  echo"<td>".$row["Monthly_Price"]."</td>";
	      echo"<td><a href ='EditLocations.php?id=$row[Location_Id]&name=$row[Location_Name]&desc=$row[Description]&price1=$row[Hourly_Price]&price2=$row[Monthly_Price]'><input type='submit' id='bt2' name='Edit' value='Edit'></a></td>";
          echo"<td><a href ='deletelocations.php?id=$row[Location_Id]'><input type='submit' name='delete' id='bt2' value='Delete'></a></td> </tr>";
		 
	  }
	  	

   }
	else{
		echo "Empty Rows";
	}
	
	echo"</table>";
	
	$conn->close(); //close connection
	
	?> 
	 
	 
	
   </div>
   <br><br><br><br><br><br><br><br>
	<footer class="footer">

        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>GET US ON</h4>
                    <ul>
                        <a href="https://play.google.com/store/apps">
                            <img src="image/play.png" width="100" height="60" class="left"></a> <br>

                        <a href="https://www.apple.com/app-store/">
                            <img src="image/apps.png" width="100" height="60" class="left"></a><br>
                        <div class="p3">
                            <p>Ezpark.2021.All Right Reserved</p>
                        </div>


                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Quick-links</h4>
                    <ul>
                       <br> <li><a href="#"><U>HOME</U></a></li>
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
