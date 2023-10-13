


<?php include('header.php'); ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Best Seller Items</h3>
                <br>
                <p>Items Which are sold above 5.</p>
              </div>
             
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" id="d-table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Product</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table><br>

              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

  <?php include('footer.html')?>

  <script>
  $( document ).ready(function() {
    $('#d-table').DataTable();
  });
  </script>
