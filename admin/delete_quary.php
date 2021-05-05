<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['d_id'])){
        
        $delete_enquary = $_GET['d_id'];
        
        $delete_quary = "delete from enquary where id='$delete_enquary'";
        

        
        $run_delete = mysqli_query($con,$delete_quary);
        
        if($run_delete){
            
            echo "<script>alert('One of Your enquary Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?enquary','_self')</script>";
            
        }
        
    }

?>




<?php } ?>