


<?php



        
		// include Database connection file 
		include("includes/db.php");

	
        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $manufacturer_id = $_POST['manufacturer'];
        $product_price = $_POST['product_price'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];
        $product_sale = $_POST['product_sale'];

    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");
        
        
        
        $query = "INSERT INTO products(p_cat_id,manufacturer_id,product_title,product_img1,product_img2,product_img3,product_price,	product_keywords,product_desc,product_sale) VALUES('$product_cat','$manufacturer_id','$product_title','$product_img1','$product_img2','$product_img3',$product_price,'$product_keywords','$product_desc',$product_sale)";
		if (!$result = mysqli_query($con,$query)) {
            echo "some thing is wrong";
	        exit(mysqli_error());
        }else{
                  
echo 111; 
        }

        
   
?>