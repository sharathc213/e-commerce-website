<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_gall'])){
        
        $delete_gall_id = $_GET['delete_gall'];
        
        $delete_gall = "delete from gallery where sl_no='$delete_gall_id'";
        
         
        
        $run_delete_gall = mysqli_query($con,$delete_gall);
        
        if($run_delete_gall){
            
            echo "<script>alert('One of Your gallery Section Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_gall','_self')</script>";
            
        }
        
    }

?>




<?php } ?>