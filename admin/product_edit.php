<?php
 require 'config/config.php';
 session_start();
 if(empty($_SESSION['user_id']) && empty($_SESSION['logged_in'])){
  
  header("Location: login.php");
  
 }

 if($_POST){
    if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['category']) || empty($_POST['quantity']) || empty($_POST['price'])  ){
      if(empty($_POST['name'])){
        $nameError = "Name can be required";
      }
      if(empty($_POST['description'])){
        $descError = "Description can be required";
      }
     
      if(empty($_POST['quantity'])){
        $qtyError = "Quantity can be required";
      }
      if(empty($_POST['price'])){
        $priceError = "Price can be required";
      }
      
        
  
      }else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $category = $_POST['category'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        if($_FILES['image']['name'] != null){
            $file = 'images/'.($_FILES['image']['name']);
            $imageType = pathinfo($file,PATHINFO_EXTENSION);
    
            if($imageType != 'png' && $imageType != 'jpg' && $imageType != 'jpeg'){
                echo "<script>alert('Image must be png,jpg,jpeg')</script>";
            }else {
                $image = $_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],$file);
    
                $stmt = $pdo->prepare("UPDATE products SET name='$name' ,description='$desc',category_id='$category',quantity='$quantity',price='$price' , image='$image' WHERE id='$id' " );
                $result = $stmt-> execute();
                if($result){
                    echo "<script>alert('successfully Updated');window.location.href='index.php';</script>";
                    //header('Location: index.php');
                };
            };
        }else{
            $stmt = $pdo->prepare("UPDATE products SET name='$name' ,description='$desc',category_id='$category',quantity='$quantity',price='$price'  WHERE id='$id' " );
            $result = $stmt-> execute();
            if($result){
                echo "<script>alert('successfully Updated');window.location.href='index.php';</script>";
                
        };
    
     }

      }
   
}




 $stmt = $pdo -> prepare("SELECT * FROM products WHERE  id=".$_GET['id']);
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
                <form class="" action="" method="post" enctype="multipart/form-data">
                  <input name="_token" type="hidden" value="">
                  <input name="id" type="hidden" value="<?php echo $result[0]['id'] ?>">
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

                    <label for="">Category</label>
                    
                    <select class="form-control" class="" name="category">
                      <option value="1"><?php echo $result[0]['category_id'] ?></option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Quantity</label>
                    <p style="color: red;"><?php echo empty($qtyError) ? '' : $qtyError ?></p>
                    <input type="number" class="form-control" name="quantity" value="<?php echo $result[0]['quantity'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="">Price</label>
                    <p style="color: red;"><?php echo empty($priceError) ? '' : $priceError ?></p>
                    <input type="number" class="form-control" name="price" value="<?php echo $result[0]['price'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="">Image</label>
                    <img src="images/<?php echo $result[0]['image'] ?>" alt="" width="150" height="150"><br>
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
