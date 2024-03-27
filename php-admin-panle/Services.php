<?php include('includes/header.php'); ?>
<br>
  <div class="row justify-content-center">
    <div class="col-md-11 text-center">
        <div class="card">
            <div class ="card-header">
                <h4>
                    
             

                    <table class="table  table-striped">
                    <thead>
                        <tr >
                            <th><a href="Services-create.php" class="btn btn-primary float-end">Scholarships</a></li></th>
                            <th><a href="Services-create.php" class="btn btn-primary float-end">Cources</a></li></th>
                            
                        
                        </tr>
                    </thead>  
                    <tbody>
                      
                    </tbody>
                </table>    
                </h4>
            </div>
            <div class="card-body">
                <?= alertmassage();  ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr >
                            <th>Id</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
<?php include('includes/footer.php'); ?>