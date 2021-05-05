<?php
include("include/db.php");
$for_type = "SELECT * FROM manufacturers";
if (!$types = mysqli_query($con,$for_type)) {
        exit(mysqli_error());
    }

   
        ?>

<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					
						<a class="navbar-brand" href="https:www.adhithasdecor.com" target="_blank"><img src="images/Logo.jpg" alt=""></a>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="index.php">Home</a>
									
								</li>
                                
                                <?php
                if(mysqli_num_rows($types) > 0)
    {
        
    	while($get_type = mysqli_fetch_assoc($types))
    	{
            ?>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                   <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $get_type["manufacturer_title"]; ?></a>
                                     <?php
             $value=$get_type['manufacturer_id'];
                 $for_cat = "SELECT * FROM product_categories WHERE manufacturer_id='$value'";
            if (!$cat = mysqli_query($con,$for_cat)) {
        exit(mysqli_error());  }
            if($num = mysqli_num_rows($cat) > 0)
    {
                ?>
									<div class="dropdown-menu">
                                         <?php
                   while($get_cat = mysqli_fetch_assoc($cat)){
                  ?> 
										<a class="dropdown-item" href="shop.php?mid=<?php echo $get_cat["manufacturer_id"]; ?>&cid=<?php echo $get_cat["p_cat_id"]; ?>"><?php echo $get_cat["p_cat_title"]; ?></a>
                                           <?php
                   }
                ?>
										
									</div>
                                     <?php
                   }
                ?>
								</li>
								
								 <?php
        }}
               ?>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="gallery.php">Gallery</a>
									
								</li>
							</ul>
						</div>
						
					</nav>		
				</div>
			</div>
		</div>
	</div>