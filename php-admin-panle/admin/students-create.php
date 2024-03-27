<?php include('includes/header.php'); ?>


  <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class ="card-header">
                <h4>
                  Add Student
                    <a href="users.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                  <?= alertmassage();  ?>
                <form action="code.php" method="POST">  
                    <div class="row">
                        <div class="col-md-6">
                             <div class="mb-3">
                                <label >name</label>
                                 <input type="text"name="name" class="form-control">
                             </div>
                        </div>
                        <div class="col-md-6">
                              <div class="mb-3">
                                <label >Phone No</label>
                                 <input type="text"name="phone" class="form-control">
                             </div>
                        </div>
                        <div class="col-md-6">  
                            <div class="mb-3">
                             <label >Email</label>
                               <input type="email"name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                              <label >password</label>
                               <input type="password"name="password" class="form-control">
                           </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                              <label >passport</label>
                               <input type="passport"name="passport" class="form-control">
                           </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                              <label >Rigisterd date</label>
                               <input type="passport"name="rigistered_date" class="form-control">
                           </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                              <label >Student Id</label>
                               <input type="passport"name="student_id" class="form-control">
                           </div>  
                        </div>
                        <div class="mb-6">
                             <div class="mb-3 text-end">
                              <button type="submit" name="saveUser" class="btn btn-primary">save</button>
                           </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
<?php include('includes/footer.php'); ?>