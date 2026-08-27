<?php
require_once "connection.php";
$sql="SELECT * FROM products";
$data=mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <blockquote>
        <h1>Product Page</h1>
        <form action="addproducts.php" enctype="multipart/form-data" method="post">
            Title<br>
            <input class="form-control" type="text" name="title" required><br>
            Slug<br>
            <input class="form-control" type="text" name="slug" required><br>
            Quantity<br>
            <input class="form-control" type="number" name="quantity" required><br>
            Price<br>
            <input class="form-control" type="text" name="price" required><br>
            Description:<br>
            <textarea  class="form-control" name="description" required></textarea><br>
            Image:<br>
            <input class="form-control" type="file" name="image" required><br><br>
            <button class="btn btn-success" type="submit" style="width:100%;">Add post</button>
</form>

</blockquote>
</div>
</body>
</html>