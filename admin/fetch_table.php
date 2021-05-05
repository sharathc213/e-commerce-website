


<?php 

include("includes/db.php");
if(!empty($_POST["man_id"]))
{
    
    $i=0;
$id=$_POST["man_id"];
$get_p_cats = "select * from product_categories where manufacturer_id='$id'";
$run_p_cats = mysqli_query($con,$get_p_cats);



while($row_p_cats=mysqli_fetch_array($run_p_cats))
{
     
  $p_cat_id = $row_p_cats['p_cat_id'];
                                    
                                    $p_cat_title = $row_p_cats['p_cat_title'];
                                    
                                    $p_cat_top = $row_p_cats['p_cat_top'];
                                    
                                    $i++;                              
?>
  <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $p_cat_title; ?> </td>
                                <td width="300"> <?php echo $p_cat_top; ?> </td>
                                <td> 
                                    <a href="index.php?edit_p_cat= <?php echo $p_cat_id; ?> ">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="index.php?delete_p_cat= <?php echo $p_cat_id; ?> ">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
<?php
}
}
?>                        
