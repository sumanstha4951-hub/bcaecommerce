<?php

require_once"header.php";
require_once"connection.php";

$sql="SELECT * FROM products";
$result=mysqli_query($conn,$sql);


?>

    <h1>Welcome to homepage.</h1>
    <h1>Prodcut List Here.</h1>
<?php foreach($result as $product){ ?>
<h1><?php echo $product['title'] ?></h1>
<img src="images/<?php echo $product['image']?>" width="200px" height="200px">
<a href="">View Product</a>
<?php } ?>
<?php

require_once"footer.php";
?>