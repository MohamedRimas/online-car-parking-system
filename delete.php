<?php
 include_once'config.php';

 
?>



<?php

   $pay_id=$_POST['id']; 
	  
	  
	  
	  
	 
	 
   $sql = "delete from Unregistered_payment where pay_id='$pay_id'";
if($conn->query($sql)){
echo "Deleted successfully<BR />";
}else{
echo "Error: ".$conn->error;
}

	  
	       


	  
//close the connection

mysqli_close($conn);

?>
