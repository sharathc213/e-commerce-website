<?php
        include("include/db.php");


if(isset($_GET['pc'])){
    $pc= $_GET['pc'];
    $for_product_details="select * from products where product_keywords='$pc'";
     if (!$product_details = mysqli_query($con,$for_product_details)) {
        exit(mysqli_error());  }

        ?>

<?php
        include("include/hedder.php");
        ?>
    <style>.swiper-container {
  width: 100%;
        height: auto;
  
    
}
.swiper-slide {
  height: auto; 
 width:auto;


  Center slide text vertically 
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
}
@media only screen and (max-width: 768px) {
  /* For mobile phones: */
 .swiper-slide {
 
 width:150px !important;

}
    .swiper-button-black{
        visibility: hidden !important;
    }
}
</style>
    
    <body class="hero-anime">	

<?php
        include("include/top-nav.php");
        ?>
        
        
        
        
	<div class="section full-height">
        
        <?php
                        if($num = mysqli_num_rows($product_details) == 1){
    

    while($get_product_details = mysqli_fetch_assoc($product_details)){
         $mid=$get_product_details["manufacturer_id"];
         $cid=$get_product_details["p_cat_id"];
      
                 $op=$get_product_details["product_price"];
                 $dp=$get_product_details["product_sale"];
                 $d=$op - $dp;
                 $off=(int)(($d / $op) * 100);
        ?>  
        
       <div class="container-fluid product-details">
       <div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6 col-12 col-lg-6 ">
                        <div class="row">
                        <div class="col-md-3 col-4 col-ld-3">
                        <ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="admin/product_images/<?php echo $get_product_details["product_img1"]; ?>" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="admin/product_images/<?php echo $get_product_details["product_img2"]; ?>" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="admin/product_images/<?php echo $get_product_details["product_img3"]; ?>" /></a></li>
						</ul>
                        </div>
						<div class="preview-pic tab-content col-md-9 col-8 col-lg-9">
						  <div class="tab-pane active" id="pic-1"><img src="admin/product_images/<?php echo $get_product_details["product_img1"]; ?>" /></div>
						  <div class="tab-pane" id="pic-2"><img src="admin/product_images/<?php echo $get_product_details["product_img2"]; ?>" /></div>
						  <div class="tab-pane" id="pic-3"><img src="admin/product_images/<?php echo $get_product_details["product_img3"]; ?>" /></div>
                            </div></div>
						
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?php echo $get_product_details["product_title"]; ?></h3>
				
						<p class="product-description"><?php echo $get_product_details["product_desc"]; ?></p>
					
                        
                        
                        <h4 class="product-code">Product Code:<?php echo $get_product_details["product_keywords"]; ?></h4>
                        
                        
                        
                        <h4 class="price"><span style="color:black" class="fa fa-rupee"></span>&nbsp;<?php echo $get_product_details["product_sale"]; ?>&nbsp;<br><span style="text-decoration: line-through;font-size:15px;" class="old-amount"><span style="text-decoration: line-through;" class="fa fa-rupee"></span>&nbsp;<?php echo $get_product_details["product_price"]; ?></span><small style="font-size:15px;color:green">&nbsp;&nbsp;(<?php echo $off; ?>%off)</small></h4>
						
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
        
        
        
        <div><center><h3 class="similar">Similar Products</h3></center></div>
        
        <?php
        include("include/db.php");



    $for_product="select * from products where manufacturer_id='$mid'";
     if (!$product = mysqli_query($con,$for_product)) {
        exit(mysqli_error());  }

        ?>
        



        
   <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
        
                         <?php
                        if($num = mysqli_num_rows($product) > 0){
    

    while($get_product = mysqli_fetch_assoc($product)){
        
       
      
                 $op=$get_product["product_price"];
                 $dp=$get_product["product_sale"];
                 $d=$op - $dp;
                 $off=(int)(($d / $op) * 100);
        ?> 
      <div class="swiper-slide">                    
          <div onclick="location.href='product-details.php?pc=<?php echo $get_product["product_keywords"]; ?>'" class="product-wrapper">
     <div class="product">
         <div class="product-img   ">
                     <img src="admin/product_images/<?php echo $get_product["product_img1"]; ?>" alt="" class="product-image img-loaded">
               
         </div>
         
         <div class="desc-wrapper text-justify">
             <div class="product-desc">
                 <div class="row1">
                    <div  class="product-name">
                        
                        <?php echo $get_product["product_title"]; ?>
                           
                     </div>
                     <center><div class="product-code"> PRODUCT CODE:<?php echo $get_product["product_keywords"]; ?></div></center>
                     <div>
                         <div class="product-price-container">
    
                                <span class="price">
                                     <span style="color:black;font-weight:bold;"class="amount"><span class="fa fa-rupee"></span><?php echo $get_product["product_sale"]; ?></span>
                                 </span>
                               <span class="old-price ">
                                     <span style="text-decoration: line-through;font-size:15px;" class="old-amount"><span style="text-decoration: line-through;color:black;" class="fa fa-rupee"></span><?php echo $get_product["product_price"]; ?></span>
                                 </span><br>
                           <small> <span style="color:green" class="discount-percent">(<?php echo $off; ?> % OFF)</span></small>
                         </div>
                     </div>
                 </div>
             </div>
            
         </div>
     </div>
          </div></div>
                 <?php
    }
                        }

        ?>
             
        
      
        
        

    </div>
    <!-- Add Pagination 
    <div class="swiper-pagination"></div> -->
      
       <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-black"></div>
    <div class="swiper-button-prev swiper-button-black"></div>
      
  </div>

  <!-- Swiper JS -->
        
        
	<div class="my-2 py-2">
	</div>
	
	
	
	<?php
        include("include/footer.php");
        ?>
      </div>
<!-- Link to page
================================================== -->

<a href="https://themeforest.net/user/ig_design/portfolio"      class="link-to-portfolio" target=”_blank”></a>

</body>
  
    
    <!-- local j quary-->
    <script src="script.js"></script>
    <script>//for swiper
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 30,
      centeredSlides: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
          navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
 </script>
</html>