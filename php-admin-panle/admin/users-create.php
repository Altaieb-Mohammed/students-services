<?php include('includes/header.php'); ?>


  <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class ="card-header">
                <h4>
                   Add User
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
                        <div class="col-md-3">
                            <div class="mb-3">
                              <label >Select Role</label>
                              <Select name="role" class="form-select">
                                <option value=" ">Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">Users</option>
                             </select>
                           </div>  
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                             <label >Select Role</label>
                             <br/>
                              <input type="checkbox" name="is_ban" style="width:30px;height:30px;" />  
                           </div>
                        </div>
                        <div class="mb-6">
                             <div class="mb-3 text-end">
                                <br/>
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