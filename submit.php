<?php
  include_once "config.php";
?>

<?php
   
   $name=$_POST["Name"];
   $desc=$_POST["Descp"];
   $price1=$_POST["HPrice"];
   $price2=$_POST["MPrice"];
   


   $sql="insert INTO locations(Location_id, Location_Name, Description, Hourly_Price, Monthly_Price) values('', '$name','$desc','$price1','$price2')";
   
  	//execute the query
	if(mysqli_query($conn,$sql)){
		header("Location:location.php");
		echo"<scrpit>alert('Record Inserted Successfully')</scrpit>";	
	}else {
		echo"<script>alert('Unsuccessfull')</script>";
	}
	//close the connction
	mysqli_close($conn);

?>








