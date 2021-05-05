<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_p_cat'])){
        
        $delete_p_cat_id = $_GET['delete_p_cat'];
        
        $delete_p_cat = "delete from product_categories where p_cat_id='$delete_p_cat_id'";
        
        $run_delete = mysqli_query($con,$delete_p_cat);
        
        $delete_pro = "delete from products where p_cat_id='$delete_p_cat_id'";
        

        
        $run_delete_pro = mysqli_query($con,$delete_pro);
        
        if($run_delete && $run_delete_pro){
            
            echo "<script>alert('One of Your Product Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_p_cats','_self')</script>";
            
        }
        
    }

?>




<?php } ?>