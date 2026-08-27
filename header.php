<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
          rel="stylesheet">
</head>

<body>

    <a href="users.php">Users</a>
    <a href="products.php">Products</a>
    <a href="category.php">Category</a>

    <?php if (isset($_SESSION['auth'])) { ?>
        <a href="#">
            Welcome: <?php echo $_SESSION['auth']['name']; ?>
        </a>
        <a href="logout.php">Logout</a>
        <a href="add-category.php">Add Category</a>


    <?php } else { ?>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
    <?php } ?>

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