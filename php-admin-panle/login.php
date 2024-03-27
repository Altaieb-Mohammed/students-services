<?php
      $pageTitle = "Login";
     include('includes/header.php');  

      
 ?> 
 <?php
     
     
 ?> 

     <div class="py-4 bg-secondary text-center">
        <h4 class="text-white"> login </h4>
     </div>

     <div class="py-5">
          <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-4">
                 <div class="card shadow-sm">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <?=  alertMassage(); ?>
                        <form action="login-code.php" method = "POST">
                            <div class="mb-3">
                                <label>Email address</label>
                                <input type="email" name = "email" class = "form-control" >
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name = "password" class = "form-control" >
                            </div>
                            <div class="mb-3">
                                <button type ="submit" name ="loginBtn" class = "btn btn-primary w-30">Sgin In</button>
                                 <a href ="sgin-up.php" class = "btn btn-danger w-30">Sgin Up</a>
                            </div>

                        </form>
                    </div>
                 </div>
                </div>
              </div>
          </div>
     </div>

<?php include('includes/footer.php') ?>
    


