<?php
require_once "connection.php";
if(!empty($_POST)){
    $title=$_POST['title'];
    $slug=$_POST['slug'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    $image=$_FILES['image']['name'];
    $tmp_image=$_FILES['image']['tmp_name'];
    if(!move_uploaded_file($tmp_image,"images/$image")){
        echo"Image not uploaded ";
    }
    $query="INSERT INTO products(title,slug,quantity,price,description,image)VALUES('$title','$slug','$quantity','$price','$description','$image')";
    $response=mysqli_query($conn,$query);
    if($response){
        echo"Post added successfully!";
    }
    }
    else{
        header("location:index.php");
    }

?>