<?php
      $pageTitle = "Contact Us";
     include('includes/header.php'); 
     
 ?>
       
       <div class="py-5  bg-secondary   ">

          <div class="container ">
              
               <h4 class ="text-white text-center ">Contact Us</h4>
          </div>
       </div>

       <div class="py-5 " >
           <div class="container">
               <div class="row">
                  <div class="col-md-6 ">
                     contact form
                  </div>
                  <div class="col-md-6">
                  <h4 class ="footer-heading">
                      Contact Information 
                    </h4> 
                    <hr>
                    <p>
                        Address : <?= webSitting('address') ?? ' '; ?>
                        Email : <?= webSitting('email1') ?? ' '; ?>, <?= webSitting('email2') ?? ' '; ?>
                        Phone No : <?= webSitting('phone1') ?? ' '; ?>, <?= webSitting('phone2') ?? ' '; ?>
                    </p>
                  </div>
               </div>
           </div>
       </div>


<?php include('includes/footer.php') ?>
    


