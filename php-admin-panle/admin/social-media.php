<?php include('includes/header.php'); ?>

  <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class ="card-header">
                <h4>
                    Social Media lists
                    <a href="social-media-create.php" class="btn btn-primary float-end">Add Social Media</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertmassage();  ?>
                <table class="table table-border table-striped">
                    <thead>
                        <tr >
                            <th>Id</th>
                            <th>Name</th>
                            <th>URL</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                               $sociaMedias=getAll('social');
                               if($sociaMedias){
                                  if(mysqli_num_rows($sociaMedias) >0)
                                {
                                foreach($sociaMedias as $item){
                                    ?>
                                    
                                        <tr>
                                            <td><?= $item['id']; ?></td>
                                            <td style="font-size:12px;"><?= $item['name']; ?></td>
                                            <td style="font-size:12px;"><?= $item['url']; ?></td>
                                            <td style="font-size:12px;"><?= $item['status'] == 1? 'Hidden':'Shown'; ?></td>
                                            <td>
                                              <a  href="social-media-edit.php?id= <?= $item['id']; ?> "class="btn btn-success btn-sm mx-1">Edit</a>
                                               <a  href="social-media-delete.php?id= <?= $item['id']; ?>"
                                               class="btn btn-danger btn-sm mx-1"
                                               onclick="return confirm('Are You sour you want To delete this Data?')"
                                               >
                                                Delete
                                               </a>
                                            </td>
                                         </tr>
                                    
                                    
                                    <?php
                                }
                                 }else
                                 {
                                    ?> 
                                   <tr>
                                    <td colspan="5">No Result Founded</td>
                                   </tr>
                                   <?php
                                   }
                                }else
                                {
                                     
                                    ?> 
                                    <tr>
                                     <td colspan="5">Something Whent Wrong</td>
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