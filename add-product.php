<?php
require_once "header.php";
require_once "connection.php";

// Redirect if the user is not logged in
if(!isset($_SESSION['auth'])){
    $_SESSION['error'] = "Please login to access this page";
    header("Location: login.php");
    exit;
}
if(!empty($_POST)){
    $category_id=$_POST['category_id'];
    $userId=$_SESSION['auth']['uid'];
    $title=$_POST['title'];
    $slug=strtolower(str_replace(" ","-",$title));
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

if (!move_uploaded_file($tmp_name, "images/" . $image)) {
    echo "Image not uploaded";
}
    $description=$_POST['description'];
    $sql="INSERT INTO products (category_id,user_id,title,slug,quantity,price ,image ,description) VALUES ('$category_id','$userId','$title','$slug','$quantity','$price' ,'$image' ,'$description') ";
    $result=mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success']="Product added successfully";
        header("Location:index.php");
    }else{
        $_SESSION['error']="Product not added ";
        header("Location: add-product.php");
    }
}

$query = "SELECT * FROM category";
$category = mysqli_query($conn, $query);
?>
<div class="container">
<blockquote>
<h1>Add Products</h1>
<form action="" method="post" enctype="multipart/form-data">
    Category:<select class="form-select" name="category_id" required>
        <option value="">-----Select Category------</option>
        <?php foreach($category as $cat){?>
        <option value="<?php echo $cat['cid']; ?> ">
            <?php echo $cat['name'];?></option>
    <?php } ?>
</select><br><br>
Title:<input class="form-control" type="text" name="title" required><br><br>
Quantity:<input class="form-control" type="number" name="quantity" required><br><br>
Price:<input class="form-control" type="number" name="price" required><br><br>
Image:<input class="form-control" type="file" name="image" required><br><br>
Description:<textarea class="form-control" name="description" required></textarea><br><br>
<button class="btn btn-success">Add Product</button>
</form>
</blockquote>
</div>