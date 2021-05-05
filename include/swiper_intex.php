  
<?php
include("include/db.php");
$for_slide = "SELECT * FROM slider";
if (!$slide = mysqli_query($con,$for_slide)) {
        exit(mysqli_error());
    }

   
        ?>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">

                                        <?php
                if(mysqli_num_rows($slide) > 0)
    {
                    $i = 0;
        
    	while($get_slide = mysqli_fetch_assoc($slide))
    	{
            if($i==0){
            ?>
          <div class="carousel-item active">
        
         <img class="img-responsive" style="width:100%;" src="admin/slides_images/<?php echo $get_slide["slide_image"]; ?>" >
        
        </div>
   
         <?php
            }
            else{
                ?>
          <div class="carousel-item">
        
         <img class="img-responsive" style="width:100%;" src="admin/slides_images/<?php echo $get_slide["slide_image"]; ?>" >
        
        </div>
   
         <?php
            }
            $i=$i+1;
           
        }
                  
                }
        ?>

    </div>
    <!-- Add Pagination -->
<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
          <!-- /Swiper -->