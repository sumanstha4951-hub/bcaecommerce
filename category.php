<?php
require_once"header.php";
require_once "connection.php";
$sql="SELECT * FROM category";
$data=mysqli_query($conn,$sql);


?>

    <div class="container">
    <blockquote>
        <h1>Category</h1>
        <form action="addcategory.php" enctype="multipart/form-data" method="post">
            Name<br>
            <input class="form-control" type="text" name="name" required><br>
            <button class="btn btn-success" type="submit" style="width:100%;">Add Users</button>
</form>

</blockquote>
</div>
<?php
require_once"footer.php";
?>