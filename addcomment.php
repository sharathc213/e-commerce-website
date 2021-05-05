 


<?php
 
	if( isset($_POST['name'])  && isset($_POST['email']) && isset($_POST['phone'])  && isset($_POST['quiry']))
	{
		// include Database connection file 
		include("include/db.php");

		// get values 
		  $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $quary = $_POST['quiry'];
    $status = "unread";

		 $insert_quary = "insert into enquary (name,email,phone,quary,status) values ('$name','$email','$phone','$quary','$status')";
    
		if (!$run_quary = mysqli_query($con,$insert_quary)) {
	        exit(mysqli_error());
           
	    }
	
	}
?>