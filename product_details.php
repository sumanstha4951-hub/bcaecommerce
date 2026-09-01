<?php
require_once"header.php";
require_once"connection.php";
$slug=$_GET['slug'];
$sql="SELECT category.cid,category.name as category_name,users.uid,users.name,products.* FROM products
JOIN category on category.cid=products.category_id
JOIN users ON users.uid=products.user_id
WHERE products.slug='$slug'";
$result=mysqli_query($conn,$sql);
$product=mysqli_fetch_assoc($result);
?>
    <h1>Prodcut Details</h1>
<img src="images/<?php echo $product['image']?>" width="180" height="200px"><hr>
<h3><?php echo $product['title'] ?></h3>
<p>Price:<?php echo $product['price'] ?>
Vender: <?php echo $product['name'] ?>
Category:<?php echo $product['category_name'] ?>
</p>
<p><?php echo $product['description'] ?></p>
<a href="">Order Now</a>
<?php
require_once"footer.php";
?>