<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_box'])){
        
        $edit_box_id = $_GET['edit_box'];
        
        $edit_box_query = "select * from boxes_section where box_id='$edit_box_id'";
        
        $run_edit_box = mysqli_query($con,$edit_box_query);
        
        $row_edit_box = mysqli_fetch_array($run_edit_box);
        
        $box_id = $row_edit_box['box_id'];
        
        $box_title = $row_edit_box['box_title'];
        
        $box_image = $row_edit_box['box_image'];
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Box
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-pencil fa-fw"></i> Edit Box
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Box Title 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $box_title; ?> " name="box_title" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                                
                     <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            box Image
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="file" name="box_image" class="form-control">
                            
                            <br/>
                            
                            <img src="box_image/<?php echo $box_image; ?>" class="img-responsive">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                
                 <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="submit" name="update_box" value="Update Now" class="btn btn-primary form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

          if(isset($_POST['update_box'])){
              
                    $box_title = $_POST['box_title'];
                if(is_uploaded_file($_FILES['box_image']['tmp_name'])){
                    
         $box_image = $_FILES['box_image']['name'];
        
        $temp_name = $_FILES['box_image']['tmp_name'];
        

        echo  "<script>alert($box_image)</script>";
              echo  "<script>alert($temp_name)</script>";

            
            move_uploaded_file($temp_name,"box_image/$box_image");
              
              $update_box = "update boxes_section set box_title='$box_title',box_image='$box_image' where box_id='$box_id'";
              
              $run_box = mysqli_query($con,$update_box);
              
              if($run_box){
                  
                  echo "<script>alert('Your Box Has Been Updated')</script>";
                  
                  echo "<script>window.open('index.php?view_boxes','_self')</script>";
                  
              }
              
          }
          else{
              
               $update_box = "update boxes_section set box_title='$box_title' where box_id='$box_id'";
              
              $run_box = mysqli_query($con,$update_box);
              
              if($run_box){
                  
                  echo "<script>alert('Your Box Has Been Updated')</script>";
                  
                  echo "<script>window.open('index.php?view_boxes','_self')</script>";
                  
              }
              
          }
          }

?>



<?php } ?> 