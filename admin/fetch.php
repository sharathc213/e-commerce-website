
<?php 

include("includes/db.php");
if(!empty($_POST["man_id"]))
{
$id=$_POST["man_id"];
$get_p_cats = "select * from product_categories where manufacturer_id='$id'";
$run_p_cats = mysqli_query($con,$get_p_cats);
?>
<option value="">Select product Type</option>
<?php
while($row=mysqli_fetch_array($run_p_cats))
{
     
                                  $p_cat_id = $row['p_cat_id'];
                                  $p_cat_title = $row['p_cat_title'];
                              
?>
<option value="<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></option>
<?php
}
}
?>                        ?>





