


<?php
        include("include/hedder.php");
        ?>
<style>.swiper-container {
      width: 100%;
      height:auto;
     
  
  
   
 }
    .swiper-slide {
      background-position: center;
      background-size:cover;
      object-fit: cover;
   
      
    }
@media only screen and (max-width: 768px) {
  /* For mobile phones: */

    .swiper-button-white{
        visibility: hidden !important;
    }
}</style>
    
    <body class="hero-anime">	

<?php
        include("include/top-nav.php");
        ?>
        
        
        
        
	<div class="section full-height">
         <!-- Swiper -->
        <?php
        include("include/swiper_intex.php");
        ?>
        <!-- /Swiper -->
        
         <div data-aos="zoom-in"> <h1  class="name">Adhitha's home decor</h1> </div> 

        <div class="row container-fluid  features" >
            <div  data-aos="fade-up" class="col-md-6 ">
               <img  class="responsive img-fluid img-thumbnail features-img" src="images/artifical-plants-2.jpg">
            </div>
        <div class="col-md-6">
            
             <div class="feature-contant" style="margin-left:30px;" >
             <center>
               <h1 data-aos="fade-up" data-aos-duration="1000" class="feature-content-name">Artificial Plants to Decor Your Home & Office</h1><br>
               <p data-aos="fade-down" data-aos-duration="1500">Get Wide range of Artificial Plants that suits to your requirements.</p>
               <p data-aos="fade-down" data-aos-duration="2000">Decor your home or office according to your choice, we will help you to get the right product for You</p></center>
                   <div data-aos="fade-up" data-aos-duration="2000"  class="buttons row feature-button">
                      <center> 
                        <a href="#" id="hulk"  class="btn btn-primary btn-rounded btn-large ">Send Enquiry</a></center>
                   </div>
            </div>
            </div>
               
            </div>
        
        <!-- hedding(cattegory) -->
         <div data-aos="zoom-in" > <h1 class="category-hedding">Categories</h1> </div>
                                                    
            <!-- Categories 1 -->
        
       
         <div class="container">
 
          <div  class=" row">
       
    <?php

$for_box = "SELECT * FROM boxes_section";
if (!$box = mysqli_query($con,$for_box)) {
        exit(mysqli_error());
    }

    if(mysqli_num_rows($box) > 0)
    {
        
    	while($get_box = mysqli_fetch_assoc($box))
    	{
        ?>
              
              
     <div data-aos="zoom-down" class="col-md-4">
        <div class="card">
           <div class="card-image">
            <div class="wrap">
              <img class="img-fluid" src="admin/box_image/<?php echo $get_box["box_image"]; ?>" alt="<?php echo $get_box["box_title"]; ?>">
           </div><!-- card image -->
           </div> 
           <div class="card-content  text-dark">
           <center><span class="card-title"><?php echo $get_box["box_title"]; ?></span></center>         
           
          </div><!-- card content -->
         
      </div>
  </div>
              
              
         <?php
        }
                }
        ?>


           


             </div>
               </div>
       <!-- /Categories  1 -->
        
        
        
                <div class="row container-fluid  features" >
           
        <div class="col-md-6">
             <div class="feature-contant" style="margin-left:30px;" >
             <center>
               <h1 data-aos="fade-up" data-aos-duration="1000" class="feature-content-name">Artifical Grass</h1><br>
               <p data-aos="fade-down" data-aos-duration="1500">Create your customized landscape ideas with artificial grass,which saves cash, time, effort, and resources. 
</p>
               <p data-aos="fade-down" data-aos-duration="2000">For
                   Office,Hotel ,Balcony ,or sports area Artificial Grass is best option to use without thinking of maintenance . </p>
                   <div data-aos="fade-up" data-aos-duration="2000"  class="buttons row feature-button">
                      <center>  
                        <a href="#" id="hulk1"  class="btn btn-primary btn-rounded btn-large ">Send Enquiry</a></center>
                   </div>
            </div>
            
            </div>
                     <div  data-aos="fade-up" class="col-md-6 ">
               <img  class="responsive img-fluid img-thumbnail features-img" src="images/green-flooring.jpg">
            </div>
               
            </div>
        
        
        
                <div class="row container-fluid  features" >
            <div  data-aos="fade-up" class="col-md-6 ">
               <img  class="responsive img-fluid img-thumbnail features-img" src="images/vertical%20garden.png">
            </div>
        <div class="col-md-6">
             <div class="feature-contant" style="margin-left:30px;" >
             <center>
               <h1 data-aos="fade-down" data-aos-duration="1000" class="feature-content-name">Artificial Vertical Garden</h1><br>
               <p data-aos="fade-down" data-aos-duration="1500">We are Specialist in the Artificial Vertical garden(Vertically arranged garden), it gives new look to your place without any maintenance worry. </p>
               <p data-aos="fade-down" data-aos-duration="2000">You no need to take much more time to research and ideas, just contact us and we will help you by providing best suitable option for your place , in vertical garden you can get wide range of varieties</p></center>
                   <div data-aos="fade-up" data-aos-duration="2000"  class="buttons row feature-button">
                      <center>  
                        <a href="#" id="hulk2"  class="btn btn-primary btn-rounded btn-large ">Send Enquiry</a></center>
                   </div>
            </div>
            </div>
               
            </div>
        
        
        
        
                <div class="row container-fluid  features" >
           
        <div class="col-md-6">
             <div class="feature-contant" style="margin-left:30px;" >
             <center>
               <h1 data-aos="fade-up" data-aos-duration="1000" class="feature-content-name">Artificial Greenary</h1><br>
               <p data-aos="fade-down" data-aos-duration="1500">We are Specialist in the Artificial Greenary(Green Wall), it gives new look to your place without any maintenance worry.

 </p>
               <p data-aos="fade-down" data-aos-duration="2000">You no need to take much more time to research and ideas, just contact us and we will help you by providing best suitable option for your place , in vertical garden you can get wide range of varieties</p></center>
                   <div data-aos="fade-up" data-aos-duration="2000"  class="buttons row feature-button">
                      <center>  
                        <a href="#" id="hulk3"  class="btn btn-primary btn-rounded btn-large ">Send Enquiry</a></center>
                   </div>
            </div>
            </div>
                     <div  data-aos="fade-up" class="col-md-6 ">
               <img  class="responsive img-fluid img-thumbnail features-img" src="images/artificial-greenary.jpg">
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
   <!-- for swiper -->
    <script src="index.js">
 </script>
        <script>
    

</script>>
</html>