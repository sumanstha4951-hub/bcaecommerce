<?php
require_once "connection.php";
$sql="SELECT * FROM users";
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
        <h1>Users Page</h1>
        <form action="addusers.php" enctype="multipart/form-data" method="post">
            Name<br>
            <input class="form-control" type="text" name="name" required><br>
            Email<br>
            <input class="form-control" type="email" name="email" required><br>
            Password<br>
            <input class="form-control" type="password" name="password" required><br>
            Gender<br>
            <input type="radio" name="gender" value="Male">Male<br>
            <input type="radio" name="gender" value="Female">Female<br>
            <input type="radio" name="gender" value="Others">Others<br><br>
            Role:<select name="role">
           <option value="admin">Admin</option>
           <option value="user">User</option>
           </select><br><br>
            Description:<br>
            <textarea  class="form-control" name="description" required></textarea><br>
            Image:<br>
            <input class="form-control" type="file" name="image" required><br><br>
            <button class="btn btn-success" type="submit" style="width:100%;">Add Users</button>
</form>

</blockquote>
</div>
</body>
</html>