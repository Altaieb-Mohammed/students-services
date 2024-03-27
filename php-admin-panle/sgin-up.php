<?php
      $pageTitle = "Login";
     include('includes/header.php');  
 ?> 


     <div class="py-4 bg-secondary text-center">
        <h4 class="text-white"> Create Acount <a href ="login.php" class = "btn btn-primary w-10">Cancel</a></h4>
        
                                 
     </div>

     <div class="py-5">
          <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-4">
                 <div class="card shadow-sm">
                    <div class="card-header">
                        <h4>New Account</h4>
                    </div>
                    <div class="card-body">
                        <?=  alertMassage(); ?>
                        <form action="user-code.php" method = "POST">
                        <div class="mb-3">
                                <label>Student Name</label>
                                <input type="text" name = "name" class = "form-control" >
                            </div>
                            <div class="mb-3">
                                <label>Student ID</label>
                                <input type="text" name = "stId" class = "form-control" >
                            </div>
                            <div class="mb-3">
                                <label>Phone No</label>
                                <input type="text" name = "phone" class = "form-control" >
                            </div>
                            <div class="mb-3">
                                <label>Rigisteration Year</label>
                                <input type="text" name = "rigYear" class = "form-control" >
                            </div>
                            <div class="mb-3">
                                <label>Email address</label>
                                <input type="email" name = "email" class = "form-control" >
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name = "password" class = "form-control" >
                            </div>
                            <div class="mb-3">
                                <button href ="login.php"class = "btn btn-danger w-30">Cancel</button>
                                <button type ="submit" name ="signUp" class = "btn btn-primary w-30 ">Save</button>
                                
                            </div>

                        </form>
                    </div>
                 </div>
                </div>
              </div>
          </div>
     </div>

<?php include('includes/footer.php') ?>
    


