<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_manufacturer'])){
        
        $delete_id = $_GET['delete_manufacturer'];
        
        $delete_manufacturer = "delete from manufacturers where manufacturer_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_manufacturer);
        
        $delete_p_cat = "delete from product_categories where manufacturer_id='$delete_id'";
        
        $run_delete_cat = mysqli_query($con,$delete_p_cat);
        
        $delete_pro = "delete from products where manufacturer_id='$delete_id'";

        
        $run_delete_pro = mysqli_query($con,$delete_pro);
        
        if($run_delete && $run_delete_cat && $run_delete_pro){
            
            echo "<script>alert('One of your manufacturer has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_manufacturers','_self')</script>";
            
        }
        
    }

?>

<?php } ?>