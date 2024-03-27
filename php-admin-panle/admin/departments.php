<?php include('includes/header.php'); ?>

  <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class ="card-header">
                <h4>
                    user list
                    <a href="users-create.php" class="btn btn-primary float-end">Add Users</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertmassage();  ?>
                <table class="table table-border table-striped">
                    <thead>
                        <tr >
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>Role</th>
                            <th>Is Ban</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                           <?php
                             $users=getAll('users');
                             if(mysqli_num_rows($users) >0)
                             {
                                foreach($users as $usersItem){
                                    ?>
                                    
                                        <tr>
                                            <td><?= $usersItem['id']; ?></td>
                                            <td style="font-size:12px;"><?= $usersItem['name']; ?></td>
                                            <td style="font-size:12px;"><?= $usersItem['email']; ?></td>
                                            <td style="font-size:12px;"><?= $usersItem['phone']; ?></td>
                                            <td style="font-size:12px;"><?= $usersItem['role']; ?></td>
                                            <td style="font-size:12px;"><?= $usersItem['is_ban'] == 1? 'Banded':'Active'; ?></td>
                                            <td>
                                              <a href="users-edit.php?id= <?= $usersItem['id']; ?> "class="btn btn-success btn-sm">Edit</a>
                                               <a href="users-deleat.php"class="btn btn-danger btn-sm mx-2">Deleat</a>
                                            </td>
                                         </tr>
                                    
                                    
                                    <?php
                                }
                             }else
                             {
                               ?> 
                               <tr>
                                  <td colspan="7">No Result Founded</td>
                               </tr>
                                <?php
                             }

                           ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
<?php include('includes/footer.php'); ?>