<?php

require_once"header.php";
require_once"connection.php";

$sql="SELECT * FROM products";
$result=mysqli_query($conn,$sql);


?>
<div class="container">
    <h1>Prodcut List Here.</h1>
    <div class="card">
<?php foreach($result as $product){ ?>
<div class="product">
<img src="images/<?php echo $product['image']?>" width="180" height="200px"><hr>
<h3><?php echo $product['title'] ?></h3>
<a href="">View Product</a>
</div>
<?php } ?>
</div>
</div>

<?php

require_once"footer.php";
?>