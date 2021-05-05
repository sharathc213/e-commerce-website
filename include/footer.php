<!-- Footer -->
<footer class="page-footer font-small teal pt-4">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3 image">

        <!-- Content -->
          <div class="footer-information">
          
                 <center> <H3>OUR INFORMATION</H3></center>
                 
                 <H3 style="margin-top:40px;">Office Address</H3>
                
                <P ><a style="text-decoration:none;color:white;"href="https://www.google.com/maps/place/Udma,+Kerala/@12.4377833,74.9986947,14z/data=!3m1!4b1!4m5!3m4!1s0x3ba48107bec6f51b:0x9629a375ed2f2758!8m2!3d12.43675!4d75.0173035"><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
   Forth Gate Road ,Uduma , pin:671318 , Kasaragod dist<br>
              Location (click hear) </a></P>
                
                <H3 style="margin-top:40px;">Contact Us</H3>
                
                
                 <P >
                     <a style="text-decoration:none;color:white;" href="tel:8547161151"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;+91-8547161151</a></P><br>
         <p>   <a style="text-decoration:none;color:white;" href="https://wa.me/+919061036161"><i class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;+91-9061036161</a></p><br>
        <p>   <a style="text-decoration:none;color:white;" href="mailto:adhithashomedecor@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;adhithashomedecor@gmail.com</a></p></div>

      </div>
      <!-- Grid column -->



      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-3 form">

        <!-- Content -->
                    <form  method="POST" id="comment_form">
            <div class="row">
                 <div class="col-md-6">
             <H3 style="margin-top:20px;text-align:center;">CONTACT US</H3>
                </div>
            
               
                </div>
                 <hr>
                <br>
                <div class="row">
                <label class="label control-label col-md-2">Full Name</label>
                <div class="col-md-10">
                    	<input type="text" autocomplete="off" name="name" id="name" class="form-control"  placeholder="Enter Name">
                   </div></div>
                 <br>
                 <div class="row">
                <label class="label control-label col-md-2">Phone Number</label>
                <div class="col-md-10">
                    	<input type="text" autocomplete="off" name="phone" id="phone" class="form-control"  placeholder="Enter Contact No">
                   </div></div>
                <br>
                 <div class="row">
                <label class="label control-label col-md-2">E-mail</label>
                <div class="col-md-10">
                    	<input type="text" autocomplete="off" name="email" id="email" class="form-control"  placeholder="Enter email">
                   </div></div>
                <br>
                 
                 
                     <div class="row">
                <label class="label control-label col-md-2">Ask Something</label>
                <div class="col-md-10">
                    <textarea data-emojiable="true" class="form-control textarea" name="Quary" id="quiry" placeholder="Enter Comment" rows="5"></textarea>
                        
     </div></div><br>
                 <div>
                                 
<button type="button" class="btn btn-primary" onclick="addRecod()">submit</button>
                     <br>
               </div> </form>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    </div>
  <!-- Footer Text -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a style="text-decoration:none;color:black;" href="https://adhithasdecor.com/"> adhithasdecor.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script>
function addRecod() {
    // get values
   
   
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var quiry = $("#quiry").val();
    
    
    if(name =="" ||email=="" ||phone==""|| quiry==""){
        
         alert("Please fill all the fields");
        
    }
    else{
        
   


    // Add record
   $.ajax({
       
       type:'POST',
                    url:'addcomment.php',
                    
                    data:{
                        quiry: quiry,
        name: name,
        phone: phone,
        email: email
        },
                   success:function(data){
                       
   
    $("#email").val("");
    $("#phone").val("");
    $("#quiry").val("");
    $("#name").val("");
                       
                       alert("We Will Contact you Soon.....");
                      
                   }
                });
        
    
          
 }
    
    
    
}
</script>

