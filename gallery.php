
<?php
        include("include/hedder.php");
        ?>
<link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
    
    <!-- local j quary-->
 
 
        

    <style>
    h1{
  font-family: Satisfy;
  font-size:50px;
  text-align:center;
  color:black;
  padding:1%;
}
</style>
 
</head>
    
    
    <body class="hero-anime">	

<?php
        include("include/top-nav.php");
        ?>
        
        
        
        
	<div class="section full-height">
        
 
    
          <h1>Our Gallery</h1><hr>  
           
	<div id="gallery" class="container-fluid">  
    <?php

$for_gallery = "SELECT * FROM gallery";
if (!$gallery = mysqli_query($con,$for_gallery)) {
        exit(mysqli_error());
    }

    if(mysqli_num_rows($gallery) > 0)
    {
        
    	while($get_gallery = mysqli_fetch_assoc($gallery))
    	{
        ?>
              
              <img src="admin/gallery_images/<?php echo $get_gallery["image"]; ?>" class="card img-responsive">

              
         <?php
        }
                }
        ?>



</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      </div>
    </div>

  </div>
</div>
	
	<?php
        include("include/footer.php");
        ?>
      </div>
<!-- Link to page
================================================== -->

<a href="https://themeforest.net/user/ig_design/portfolio"      class="link-to-portfolio" target=”_blank”></a>

</body>
  <script src="script.js"></script>
   <script> 
  var swiper = new Swiper('.slidera .swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.slidera .swiper-pagination',
      },
    });
       
       
       
       $(document).ready(function(){
  $("img").click(function(){
  var t = $(this).attr("src");
  $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
  $("#myModal").modal();
});

$("video").click(function(){
  var v = $("video > source");
  var t = v.attr("src");
  $(".modal-body").html("<video class='model-vid' controls><source src='"+t+"' type='video/mp4'></source></video>");
  $("#myModal").modal();  
});
});//EOF Document.ready
     
 </script>
</html>