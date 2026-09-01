<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

</head>

<body>

    <nav>
        <div class="logo">
            <h1>DigitalTech</h1>
        </div>
        <div class="search">
            <input type="text">
        </div>
        <li>
            <a href="users.php">Users</a>
            <a href="products.php">Products</a>
            <a href="category.php">Category</a>

            <?php if (isset($_SESSION['auth'])) { ?>


            <a href="logout.php">Logout</a>
            <a href="add-category.php">Add Category</a>
            <a href="add-product.php">Add Product</a>


            <?php } else { ?>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            <?php } ?>
        </li>
        <hr>

        <?php if (isset($_SESSION['success'])) { ?>
        <h5 class="text-success">
            <?php echo $_SESSION['success']; ?>
        </h5>
        <?php unset($_SESSION['success']); ?>
        <?php } ?>

        <?php if (isset($_SESSION['error'])) { ?>
        <h5 class="text-danger">
            <?php echo $_SESSION['error']; ?>
        </h5>
        <?php unset($_SESSION['error']); ?>
        <?php } ?>
    </nav>