<?php
        include("include/db.php");


if(isset($_GET['mid'])&& isset($_GET['cid'])){
    $mid= $_GET['mid'];
    $cid= $_GET['cid'];
    $for_product="select * from products where manufacturer_id='$mid' and p_cat_id='$cid'";
     if (!$product = mysqli_query($con,$for_product)) {
        exit(mysqli_error());  }

        ?>
        


<?php
        include("include/hedder.php");
        ?>
    
    <body class="hero-anime">	

        <?php
            include("include/top-nav.php");
        ?>
        
        
        
        
	<div class="section full-height">
        
        
        <div class="container-fluid">
             <div class="row  row-wrapper">
                 <?php
                        if($num = mysqli_num_rows($product) > 0){
    

    while($get_product = mysqli_fetch_assoc($product)){
      
                 $op=$get_product["product_price"];
                 $dp=$get_product["product_sale"];
                 $d=$op - $dp;
                 $off=(int)(($d / $op) * 100);
        ?>  
                    <div class="col-md-3 col-lg-2 col-6  product-wrapper">
     <div onclick="location.href='product-details.php?pc=<?php echo $get_product["product_keywords"]; ?>'" class="product">
         <div class="product-img">
                     <img src="admin/product_images/<?php echo $get_product["product_img1"]; ?>" alt="" class="product-image img-loaded">
               
         </div>
         
         <div class="desc-wrapper text-justify">
             <div class="product-desc">
                 <div class="row1">
                     <div class="product-name">
                        
                           <?php echo $get_product["product_title"]; ?>
                           
                     </div>
                     <center><div class="product-code"> PRODUCT CODE: <?php echo $get_product["product_keywords"]; ?></div></center>
                     <div>
                         <div class="product-price-container">
    
                                 <span class="price">
                                     <span style="color:black;font-weight:bold;"class="amount"><span class="fa fa-rupee"></span><?php echo $get_product["product_sale"]; ?></span>
                                 </span>
                                 <span class="old-price ">
                                     <span style="text-decoration: line-through;font-size:15px;" class="old-amount"><span style="text-decoration: line-through;" class="fa fa-rupee"></span><?php echo $get_product["product_price"]; ?></span>
                                 </span>
                            <small> <span style="color:green" class="discount-percent">(<?php echo $off; ?> % OFF)</span></small>
                         </div>
                     </div>
                 </div>
             </div>
            
         </div>
     </div>
    </div>
            <?php
    }
                        }
}
        ?>
                               
                                           
            
 
        </div>
               
           </div> 

	
	
	
	<?php
        include("include/footer.php");
        ?>
      </div>
<!-- Link to page
================================================== -->

<a href="https://adhithasdecor.com"      class="link-to-portfolio" target=”_blank”></a>

</body>
  
    
    <!-- local j quary-->
    <script src="script.js"></script>

</html>