
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
                  <input name="id" type="hidden" value="">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="">
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" rows="8" cols="30"></textarea>
                  </div>
                  <div class="form-group">

                    <label for="">Category</label>
                    <select class="form-control" class="" name="category">
                      <option value="">SELECT CATEGORY</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control" name="quantity" value="">
                  </div>
                  <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" class="form-control" name="price" value="">
                  </div>
                  <div class="form-group">
                    <label for="">Image</label>
                    <img src="images/" alt="" width="150" height="150"><br>
                    <input type="file" name="image" value="">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-success" name="" value="SUBMIT">
                    <a href="index.php" class="btn btn-warning">Back</a>
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
