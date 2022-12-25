<?php
 include_once'config.php';

 
?>



<?php

      $location_id=$_GET['id'];
	  
	  //Query for delete
	  $query="delete from locations where Location_Id='$location_id'";
	  
	  //Execute
	 
    $data=mysqli_query($conn, $query);
	  
	  if ($data)
	  {
		  echo "<script>alter'Recorde deleted'</script>";
	  }
	  else{
		  
		  echo "<script>alter'Recorde not deleted'</script>";
	  }
	  
	  
	       


	  
//close the connection

mysqli_close($conn);

?>


