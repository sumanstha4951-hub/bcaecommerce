<?php
require_once"header.php";
require_once "connection.php";

// Redirect if the user is not logged in
if(!isset($_SESSION['auth'])){
    $_SESSION['error'] = "Please login to access this page";
    header("Location: login.php");
    exit;
}

// Add category
if(!empty($_POST)){
    $name = $_POST['name'];

    $sql = "INSERT INTO category(name) VALUES('$name')";

    if(mysqli_query($conn, $sql)){
        $_SESSION['success'] = "Category added successfully";
        header("Location: index.php");
        exit;
    }else{
        $_SESSION['error'] = "Error adding category";
        header("Location: add-category.php");
        exit;
    }
}

// Display categories
$query = "SELECT * FROM category";
$data = mysqli_query($conn, $query);
?>
<div class="container">
<form action="" method="post">
    Category Name: <input type="text" class="form-control" name="name" required>
    <br><br>
    <button type="submit"  class="btn btn-success" style="width:100%">Add Category</button>
</form>

<ul>
<?php foreach($data as $category){ ?>
    <li><?php echo $category['name']; ?></li>
<?php } ?>
</ul>
</div>
<?php require_once 'footer.php'; ?>