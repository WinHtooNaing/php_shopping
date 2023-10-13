

<?php include('header.php'); ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Order Listings</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <a href="order_list.php" class="btn btn-default">Back</a>
                <br><br>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Order Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    </tbody>
                  </tbody>
                </table><br>
                <!-- <nav aria-label="Page navigation example" style="float:right">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="?id=<?php echo $_GET['id']?>&pageno=1">First</a></li>
                    <li class="page-item <?php if($pageno <= 1){ echo 'disabled';} ?>">
                      <a class="page-link" href="<?php if($pageno <= 1) {echo '#';}else{ echo "?id=".$_GET['id']."&pageno=".($pageno-1);}?>">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#"><?php echo $pageno; ?></a></li>
                    <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled';} ?>">
                      <a class="page-link" href="<?php if($pageno >= $total_pages) {echo '#';}else{ echo "?id=".$_GET['id']."&pageno=".($pageno+1);}?>">Next</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="?id=<?php echo $_GET['id']?>&pageno=<?php echo $total_pages?>">Last</a></li>
                  </ul>
                </nav> -->
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
