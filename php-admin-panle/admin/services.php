<?php include('includes/header.php'); ?>

  <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class ="card-header">
                <h4>
                    Services
                    <a href="Services-create.php" class="btn btn-primary float-end">Add Service</a>
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