<?php
 require 'config/config.php';
 session_start();
 if(empty($_SESSION['user_id']) && empty($_SESSION['logged_in'])){
  
  header("Location: login.php");
  
 }

 if($_POST){
    if(empty($_POST['name']) || empty($_POST['description']) ){
      if(empty($_POST['name'])){
        $nameError = "Name can be required";
      }
      if(empty($_POST['description'])){
        $descError = "Description can be required";
      }
      }else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $desc = $_POST['description'];
        
        
            $stmt = $pdo->prepare("UPDATE categories SET name='$name' ,description='$desc'  WHERE id='$id' " );
            $result = $stmt-> execute();
            if($result){
                echo "<script>alert('successfully Updated');window.location.href='category.php';</script>";
                
        };
    
     }

      }

 $stmt = $pdo -> prepare("SELECT * FROM categories WHERE  id=".$_GET['id']);
 $stmt -> execute();
 $result = $stmt -> fetchAll();

?>



<?php include('header.php'); ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <form class="" action="" method="post">
                <input name="id" type="hidden" value="<?php echo $result[0]['id'] ?>">
                  <input name="_token" type="hidden" value="">
                  
                  <div class="form-group">
                    <label for="">Name</label>
                    <p style="color: red;"><?php echo empty($nameError) ? '' : $nameError ?></p>
                    <input type="text" class="form-control" name="name" value="<?php echo $result[0]['name'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <p style="color: red;"><?php echo empty($descError) ? '' : $descError ?></p>
                    <textarea class="form-control" name="description" rows="8" cols="30"><?php echo $result[0]['description'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-success" name="" value="SUBMIT">
                    <a href="category.php" class="btn btn-warning">Back</a>
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
