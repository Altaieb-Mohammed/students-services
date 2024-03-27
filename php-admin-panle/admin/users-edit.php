<?php include('includes/header.php'); ?>

  <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class ="card-header">
                <h4>
                   Edit User
                    <a href="users.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
              
                <form action="code.php"method="POST">
                <?php
                 $paramResult = checkparamId('id');
                 if(!is_numeric($paramResult)){
                  echo '<h5>'.$paramResult.'</h5>';
                  return false;

                 }
                 $user = getById('users',checkparamId('id'));
                 if($user['status']== 200){
                    ?>

                           <input type="hidden" name="userId" value = " <?= $user['data']['id'];?>"  reqaierd >
                           
                           <div class="row">
                         <div class="col-md-6">
                             <div class="mb-3">
                                <label >name</label>
                                 <input type="text" name="name" value = " <?= $user['data']['name'];?>"  reqaierd class="form-control">
                             </div>
                        </div>
                        <div class="col-md-6">
                              <div class="mb-3">
                                <label >Phone No</label>
                                 <input type="text"name="phone" value = " <?= $user['data']['phone'];?>" reqaierd class="form-control">
                             </div>
                        </div>
                        <div class="col-md-6">  
                            <div class="mb-3">
                             <label >Email</label>
                               <input type="email"name="email" value = " <?= $user['data']['email'];?>" reqaierd class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                              <label >password</label>
                               <input type="password"name="password" value = " <?= $user['data']['password'];?>"reqaierd class="form-control">
                           </div>  
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                              <label >Select Role</label>
                              <Select name="role" reqaierd class="form-select">
                                <option value="">Select Role</option>
                                <option value="admin"<?= $user['data']['role'] == 'admin'?'selected':'';?>>Admin</option>
                                <option value="user"<?= $user['data']['role'] == 'user'?'selected':'';?>>Users</option>
                             </select>
                           </div>  
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                             <label >IS Ban</label>
                             <br/>
                              <input type="checkbox" name="is_ban" <?= $user['data']['is_ban'] == true ?'cheched':'';?> style="width:30px;height:30px;" />  
                           </div>
                        </div>
                        <div class="mb-6">
                             <div class="mb-3 text-end">
                                <br/>
                              <button type="submit" name="uptateUser" class="btn btn-primary">Update</button>
                           </div>
                        </div>
                    </div>
                    
                    <?php
                     
                 }else
                 {
                   echo '<h5>'.$user['masages'].'</h5>';

                 }
              ?>  
                    
                </form>
            </div>
        </div>
    </div>
  </div>
<?php include('includes/footer.php'); ?>