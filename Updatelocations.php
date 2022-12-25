<?php
 include_once'config.php';

 
?>


<?php
if($_GET['submit'])
{
   $location_Id=$_GET["feild0"];             
   $location_name=$_GET["Name"];
   $description=$_GET["Descp"];
   $hourly_price=$_GET["HPrice"];
   $monthly_price=$_GET["MPrice"]; 
	
	//Query for update
    
     $query="UPDATE locations SET Location_Name='$location_name', Description='$description', Hourly_Price='$hourly_price', Monthly_Price='$monthly_price' WHERE Location_Id='$location_Id'";	
     
     $data=mysqli_query($conn,$query);
	 if ($data)
	 {
		 echo"<script>alert('Record Updated Successfully')</script>";
		 
	 }
	 else
	 {
		 echo"<script>alert('Error in Updatation')</script>";
		 
	 }

}

mysqli_close($conn);

?>