

<?php include('header.php'); ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <form class="" action="" method="post" enctype="multipart/form-data">
                  <input name="_token" type="hidden" value="">

                  <div class="form-group">
                    <input type="hidden" name="id" value="">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="">
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="">
                  </div>
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="phone" value="">
                  </div>
                  <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="address" value="">
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <span style="font-size:10px">The user already has a password</span>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Role</label>
                    <input type="checkbox" name="role" value="1">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-success" name="" value="SUBMIT">
                    <a href="user_list.php" class="btn btn-warning">Back</a>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  <?php include('footer.html')?>
