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
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;

        }

        .container {
            margin: 10px;
            width: 1265px;
            height: auto;
        }

        nav {
            display: flex;
            border-bottom: 1px solid black;

        }

        .logo {
            margin: 12px;
            padding-top: 5px;
        }

        .search {
            display: flex;
            padding: 30px;
            margin-left: 20px;

        }

        .search input {
            display: flex;
            border-radius: 10px 10px 10px 10px;
            min-width: 300px;
            height: 35px;
            border:1px solid rgb(174, 136, 136);

        }

        nav li {
            display: flex;
            text-decoration: none;
            margin-left: 50px;
            justify-content: space-between;
            align-items: center;
        }

        nav li a {
            margin-left: 30px;
            text-decoration: none;
            color: black;
        }

        .product {
            border: 1px solid black;
            width: 200px;
            padding: 10px;
            border-radius: 10px 10px 10px 10px;
        }

        .card {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            border: none;
        }
        footer{
            display:flex;
            justify-content:center;
            align-items:center;
        }
    </style>

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